<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<header>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <!-- Logo DC -->
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics">
                </a>
            </div>
            <div class="col-8">
                <div class="navbar">
                    <!-- Nav  -->
                    <nav>
                        <ul class="list-unstyled ">
                            <li>
                                <a class="nav-link" href="">CHARACTERS</a>
                            </li>
                            <li>
                                <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                                    href="{{ route('comics') }}">COMICS</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">MOVIES</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">TV</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">GAMES</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">COLLECTIBLES</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">VIDEOS</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">FANS</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">NEWS</a>
                            </li>
                            <li>
                                <a class="nav-link" href="">SHOP</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
    <div class="jumbotron"></div>
</header>

</html>
