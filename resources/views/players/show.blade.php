@extends('layouts.app')

@section('title', $player->name)

@section('content')
<h2>
    {{ $player->first_name  }} {{ $player->last_name  }}
</h2>
<p>
    {{ $player->email  }}
</p>
<a href="/teams/{{ $player->team->id }}">
    {{ $player->team->name  }}
</a>


@endsection