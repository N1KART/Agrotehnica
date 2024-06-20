<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agrotehnica cahul</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans bg-light">

    <x-app-layout>

    </x-app-layout>
    <div class="container">
        <main class="my-1">
            <div class="container justify-content-center">
                <div class="row p-4">
                    <div class="col-12">

                        <div class="card mb-3 border-2 bg-light" style="max-width: 100%;">
                            <form action="{{ route('dashboard.store') }}" method="POST"enctype="multipart/form-data">
                                @csrf
                                <div class="row g-0 h-50">
                                    <div class="col-md-7 d-flex  justify-content-center align-items-center">
                                        <div class="d-flex justify-content-center">
                                            <input type="file" multiple name="images[]" id="images[]"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Titlu</span>
                                                <input type="text" id="title" name="title"
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Metrii patrti</span>
                                                <input type="number" id="size_m2" name="size_m2" value=""
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">SDK</span>
                                                <input type="number" id="sdk" name="sdk" value=""
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Nr_camere</span>
                                                <input type="text" id="nr_rooms" name="nr_rooms"
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Adresa</span>
                                                <input type="text" id="address" name="address"
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Mdl/luna</span>
                                                <input type="number" id="price_month" name="price_month"
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Descriere</span>
                                                <input type="text" id="description" name="description"
                                                    class="form-control"></input>
                                            </div>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text">Status</span>
                                                <select class="form-select" aria-label="Default select example"
                                                    id="status" name="status">
                                                    <option value="Liber">Liber</option>
                                                    <option value="Inchiriat">Inchiriat</option>
                                                    <option value="In reparatie">In reparatie</option>
                                                </select>
                                            </div>
                                            <div class="input-group justify-content-center d-flex">
                                                <input type="submit" class="btn btn-success btn-lg rounded-1 mt-4 p-3"
                                                    style="font-size: 24px; font-weight: 400;"
                                                    value="Inregisteaza" /></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <footer class="bg-light p-3">
            <p class="text-center">&copy; Nicolae Arteni - <?= date('Y') ?></p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
