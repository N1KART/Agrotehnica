<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agrotehnica Cahul</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans bg-light ">
    <header class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 p-0">
                </div>
                <div class="col-lg-10">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 mt-2 mb-2">
                            <img src="{{ asset('assets/images/ef04m4lhm4h21.png') }}" class="rounded float-start "
                                alt="logo" width="60">
                            <h3 class="" style="font-size: 24px; font-weight: bold;">Agrotehnica Cahul</h3>
                            <h3 class="" style="font-size: 18px; font-weight: 200;">Arenda Incaperilor</h3>
                        </div>
                        <p class="d-flex justify-content-end col-lg-8 mt-2 mb-2" style="font-size: 18px;">+373
                            (0)00-00-00<br>Sunati de la 8 - 21</p>
                    </div>
                </div>
                <div class="col-lg-1 d-flex justify-content-center align-items-center p-0">
                    <a class="opacity-0" style="font-size: 30px" href="{{ route('dashboard') }}"
                        active="{{ request()->routeIs('dashboard') }}">Navbar</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <main class="my-1">
            <div class="container justify-content-center">
                <div class="row p-4">
                    <div class="col-12">
                        @foreach ($deposits as $deposit)
                            <div class="card mb-3 bg-light border-0" style="max-width: 100%;">
                                <div class="row g-0 d-flex justify-content-center align-items-center">
                                    <div class="col-md-7">
                                        <div id="{{ 'carousel' . $deposit->id }}" class="carousel slide">
                                            <div class="carousel-indicators">
                                                @for ($i = 0; $i < $deposit->images->count(); $i++)
                                                    @if ($i == 0)
                                                        <button type="button"
                                                            data-bs-target="#{{ 'carousel' . $deposit->id }}"
                                                            data-bs-slide-to="0" class="active" aria-current="true"
                                                            aria-label="Slide 1"></button>
                                                    @else
                                                        <button type="button"
                                                            data-bs-target="#{{ 'carousel' . $deposit->id }}"
                                                            data-bs-slide-to="{{ $i }}"
                                                            aria-label="Slide 2"></button>
                                                    @endif
                                                @endfor
                                            </div>
                                            <div class="carousel-inner">
                                                @for ($i = 0; $i < $deposit->images->count(); $i++)
                                                    @if ($i == 0)
                                                        <div class="carousel-item active">
                                                            <img src="{{ Storage::url($deposit->images[0]->src) }}"
                                                                class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item">
                                                            <img src="{{ Storage::url($deposit->images[$i]->src) }}"
                                                                class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                    @endif
                                                @endfor
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#{{ 'carousel' . $deposit->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#{{ 'carousel' . $deposit->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="container">
                                            <div class="card-body">
                                                <h5 class="card-title mb-4" style="font-size: 28px; font-weight: 600;">
                                                    {{ $deposit->title }}</h5>
                                                <div class="input-group mb-3">
                                                    <p class="card-text form-control m-0">{{ $deposit->size_m2 }}</p>
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-default">M²</span>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <p class="card-text form-control m-0">{{ $deposit->nr_rooms }}</p>
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-default">Nr.Cameri</span>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <p class="card-text form-control m-0">{{ $deposit->address }}</p>
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-default">Adresa</span>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <h3 class="card-text form-control m-0"
                                                        style="font-size: 22px; font-weight: bold;">
                                                        {{ $deposit->price_month }}</h3>
                                                    <span class="input-group-text"
                                                        id="inputGroup-sizing-default">MDL/l</span>
                                                </div>
                                                <p class="card-text">{{ $deposit->description }}</p>
                                                <div class="input-group justify-content-center d-flex">
                                                    <button data-bs-toggle="modal"
                                                        data-bs-target="#{{ 'exampleModal' . $deposit->id }}"
                                                        class="btn btn-success btn-lg rounded-1 mt-4 p-3"
                                                        style="font-size: 24px; font-weight: 400;">Arendeaza</button>
                                                </div>
                                                <p class="card-text mt-3 d-flex justify-content-end text-primary" style="font-size: 22px; font-weight: bold; font-style: italic;">{{ $deposit->status }}</p>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModal{{ $deposit->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <form action="{{ route('index.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Lasati o
                                                                cerere<br>
                                                                <small class="text-body-secondary">si noi te vom
                                                                    telefona</small>
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" value="{{ $deposit->id }}"
                                                                name="deposit_id"></input>
                                                            <div class="form-group mb-2">
                                                                <input type="text" id="name" name="name"
                                                                    class="form-control" class="form-control"
                                                                    placeholder="Nume"></input>
                                                            </div>
                                                            <div class="input-group mb-2">
                                                                <input type="tel" id="nr_phone" name="nr_phone"
                                                                    class="form-control" class="form-control"
                                                                    placeholder="Telefon"></input>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="bg-light p-3">
        <p class="text-center">&copy; Nicolae Arteni - <?= date('Y') ?></p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
