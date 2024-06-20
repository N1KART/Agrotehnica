<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Models\Image;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deposits = Deposit::all();
        return view('index', ['deposits' => $deposits, 'images']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('images')) {
            $allowedfileExtension = ['jpg', 'png'];
            $files = $request->file('images');
            $deposit = Deposit::create($request->all());
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
            }         
            if ($check) {
                foreach ($request->images as $photo) {
                    $filename = $photo->store( 'slider/' . $deposit->id);
                    Image::create([
                        'deposit_id' => $deposit->id,
                        'src' => $filename
                    ]);
                }
            }
        }
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Deposit $deposit)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deposit $deposit)
    {
        return view('deposits.edit', ['deposit' => $deposit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Deposit $deposit)
    {

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deposit $deposit)
    {
        $deposit->delete();
        return redirect()->back();
    }
}
