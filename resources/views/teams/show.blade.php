@extends('layouts.app')

@section('title', $team->name)

@section('content')
<h2>
    {{ $team->name  }}
</h2>
<p>
    {{ $team->email  }}
</p>
<p>
    {{ $team->adress  }}
</p>
<p>
    {{ $team->city  }}
</p>

<h5>Players</h5>
@forelse($team->players as $player)
<a href="{{route('player', ['player' => $player->id])}}">
    {{ $player->first_name }} {{ $player->last_name }}
</a>
@empty
<span>No Players</span>
@endforelse

@endsection