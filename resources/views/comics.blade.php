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
                    <a href="{{ route('detail-comic', ['param' => $comic['id']]) }}">
                        <div class="comic-card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <span class="comic-title">{{ $comic['title'] }}</span>
                        </div>
                    </a>
                @endforeach
                <div id="loadMoreContainer">
                    <button id="loadMoreBtn">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
@endsection
