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

<body>
    @include('partials.header')
    <main>
        <div class="text-center main-content">
            <p>DC COMICS</p>
        </div>
    </main>
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
    @include('partials.footer')
</body>

</html>
