@extends('layouts.layout')

@section('content')
    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{asset('images/danze_eat.gif')}}') no-repeat;
            background-size: cover;
        }
    </style>

    <h1>Игроки</h1>
    <section class="players">
        @foreach($stats as $playerStat)
            <div class="player-card">
                <img src="https://a.ppy.sh/{{$playerStat['player_data']->player_id}}">
                <div class="player-info">
                    <h2>{{ $playerStat['username'] }}</h2>
                    <p>World: #{{ number_format($playerStat['global_rank']) }}</p>
                    <p>RU: #{{ number_format($playerStat['country_rank']) }}</p>
                </div>

            </div>
        @endforeach
    </section>
@endsection
