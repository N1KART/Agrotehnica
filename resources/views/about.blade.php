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

    <footer class="bg-light p-3">
        <p class="text-center">&copy; Nicolae Arteni - <?= date('Y') ?></p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
