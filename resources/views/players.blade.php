@extends('layouts.layout')

@section('content')
    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{asset('images/danze_eat.gif')}}') no-repeat;
            background-size: cover;
        }
    </style>

    <h1>Игроки</h1>
    @foreach($stats as $playerStat)
        <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
            <h2>{{ $playerStat['username'] }}</h2>
            <p>Мировой ранк: #{{ number_format($playerStat['global_rank']) }}</p>
            <p>Ранк в России: #{{ number_format($playerStat['country_rank']) }}</p>
        </div>
    @endforeach
{{--    <p>Мировой ранк: {{ number_format($stats['global_rank']) }}</p>--}}
{{--    <p>Ранк в России: {{ number_format($stats['country_rank']) }}</p>--}}
@endsection
