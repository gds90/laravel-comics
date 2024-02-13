@extends('layout.app')

@section('content')
    <div class="main-content position-relative ">
        <div class="container">
            <div class="row py-4">
                <div id="currentSeries">
                    <button id="currentSeriesBtn">CURRENT SERIES</button>
                </div>
                {{-- Ciclo l'array comics --}}
                @foreach ($comics as $comic)
                    <div class="comic-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <span class="comic-title">{{ $comic['title'] }}</span>
                    </div>
                @endforeach
                <div id="loadMoreContainer">
                    <button id="loadMoreBtn">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
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
@endsection
