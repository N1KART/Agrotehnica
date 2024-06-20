@vite(['resources/scss/app.scss', 'resources/js/app.js'])
<nav x-data="{ open: false }">
    <header class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1 d-flex justify-content-center align-items-center p-0">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle ms-5" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/images/user.png') }}" width="28" height="28"
                                class="me-2">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item "href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
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
                <div class="col-sm-1 d-flex justify-content-center align-items-center p-0">
                    <a class="opacity-0" style="font-size: 30px" href="/"active="">Navbar</a>
                </div>
            </div>
        </div>
    </header>

</nav>
