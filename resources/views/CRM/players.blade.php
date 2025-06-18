@extends('layouts.layout')

@section('content')
    <h1 class="players-h1">Все игроки</h1>
    <form method="POST" action="{{route('players.store')}}" class="players-form">
        @csrf
        <input type="text" name="player_id" placeholder="Введите ID игрока" value="{{ old('player_id') }}" required>
        <button type="submit">Добавить игрока</button>
    </form>
{{--    <div class="player-list">--}}
        <table class="players-table">
            <tr>
                <td>ID игрока</td>
                <td>Забанен?</td>
                <td>Действия</td>
            </tr>
            @foreach($players as $player)
            <tr>
                    <td>{{$player->player_id}}</td>
                    <td>{{$player->is_banned}}</td>
                    <td>
                        <form method="POST" action="{{route('players.destroy', ['player'=>$player->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Удалить</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </table>
{{--    </div>--}}
@endsection
