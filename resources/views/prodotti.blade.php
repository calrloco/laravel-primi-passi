@extends('template.app')
@section('titolo','prodotti')
@section('main')
    <div class="cards__container">
        <h3 class="card__title">Le Lunghe</h3>
        <div class="cards__container-tipi">

            @foreach ($lunghe as $lunghe)
                <div class="card">
                    <div class="card__text">
                        <p>{{ $lunghe['titolo'] }}</p>
                        <i class="fas fa-utensils"></i>
                    </div>

                    <img src="{{ $lunghe['src'] }}" alt="{{ $lunghe['titolo'] }}">
                </div>
            @endforeach
        </div>
        <h3 class="card__title">Le Corte</h3>
        <div class="cards__container-tipi">

            @foreach ($corte as $corta)
                <div class="card">
                    <div class="card__text">
                        <p>{{ $corta['titolo'] }}</p>
                        <i class="fas fa-utensils"></i>
                    </div>

                    <img src="{{ $corta['src'] }}" alt="{{ $corta['titolo'] }}">
                </div>
            @endforeach

            <h3 class="card__title">Le Cortissime</h3>
            <div class="cards__container-tipi">

                @foreach ($cortissime as $cortissima)
                    <div class="card">
                        <div class="card__text">
                            <p>{{ $cortissima['titolo'] }}</p>
                            <i class="fas fa-utensils"></i>
                        </div>

                        <img src="{{ $cortissima['src'] }}" alt="{{ $cortissima['titolo'] }}">
                    </div>
                @endforeach
            </div>
        @endsection
