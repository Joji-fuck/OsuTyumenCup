@extends('layouts.layout')

@section('content')
    <style>
        .registration-btn{
            background: url("{{asset('images/OsuButton.png')}}") no-repeat center;
            background-size: cover;
        }
    </style>
    <section class="registration">
        <a class="registration-btn" href="#"></a>
        <img class="registration-stesha" src="{{asset('images/Stesha.png')}}" alt="Маскот">
    </section>

@endsection
