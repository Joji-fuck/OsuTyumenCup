@extends('layouts.layout')

@section('content')
    <div class="CRM">
        <a href="{{route('players.index')}}" class="CRM-left">
            <p>Добавление нового игрока</p>
        </a>
        <a href="#" class="CRM-right">
            <p>Список существующих игроков</p>
        </a>
    </div>
@endsection
