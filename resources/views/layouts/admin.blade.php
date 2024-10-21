<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <header
            class="d-flex justify-content-between align-items-center position-fixed top-0 w-100 z-3 bg-white flex-md-nowrap p-3">
            <div class="row justify-content-between align-items-end px-3 w-25">
                <div class="">
                    <a class="navbar-brand col-md-3 col-lg-2 me-0 fs-2 fw-light"
                        href="/"><strong>A</strong>ntartic <span class="text-secondary">/</span></a>
                    @if (Auth::user())
                        <small class="">{{ Auth::user()->name }}</small>
                    @else
                        <small>Born to be yours</small>
                    @endif
                </div>
            </div>
            <div class="w-50 d-flex justify-content-center align-items-center">
                <ul class="list-group list-group-horizontal pt-2">
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Mac</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>iPhone</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>iPad</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Whatch</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Samsung</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Shop</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Xiaomi</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Support</small></a></li>
                    <li class="list-group-item border-0"><a
                            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="#"><small>Accessories</small></a></li>
                </ul>
            </div>
            <div class="w-25 pt-2 d-flex justify-content-between align-items-center">
                <div class="d-flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-bag" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                    </svg>
                </div>
                <div class="ms-2">
                    @if (Auth::user())
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="pe-4 btn"><small>{{ __('Logout') }}</small></button>
                        </form>
                    @else
                    <div class="d-flex">
                        <a class="nav-link pe-4 btn" href="{{ route('login') }}"><small>{{ __('Login') }}</small></a>
                        <a class="nav-link pe-4 btn" href="{{ route('register') }}"><small>{{ __('Register') }}</small></a>
                    </div>
                    @endif
                </div>
            </div>
        </header>

        <div class="container-fluid py-5 px-0">

            <main>
                @yield('content')
            </main>
        </div>

    </div>
</body>

</html>
