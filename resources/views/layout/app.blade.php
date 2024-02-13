<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    {{-- INCLUDO L'HEADER DAL FILE PARTIALS/HEADER  --}}
    @include('partials.header')
    <main>
        @yield('content')
        <div class="buyProduct">
            <div class="contentBuyProduct">
                <ul class="list-unstyled ">
                    <li>
                        <a>
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="/">
                            <span class="label">DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="/">
                            <span class="label">DC MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="/">
                            <span class="label">SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="/">
                            <span class="label">COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="/">
                            <span class="label">DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    {{-- INCLUDO IL FOOTER DAL FILE PARTIALS/FOOTER  --}}
    @include('partials.footer')
</body>

</html>
