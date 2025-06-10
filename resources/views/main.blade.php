@extends('layouts.layout')

@section('content')
    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{asset('images/danze_eat.gif')}}') no-repeat;
            background-size: cover;
        }
    </style>
    <section class="registration">
        <a class="registration-btn" href="#">
            <img src="{{asset('images/OsuButton.png')}}" alt="Запись">
        </a>
        <div class="registration-right">
            <img class="registration-stesha" src="{{asset('images/Stesha.png')}}" alt="Маскот">
        </div>
    </section>

@endsection
