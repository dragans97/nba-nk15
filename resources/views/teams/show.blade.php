@extends('layouts.app')

@section('title', $team->name)

@section('content')
<a href="{{ route('team-news', ['team' => $team->name])}}" class="btn btn-dark d-block my-2">Show Related News</a>
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

<h5>Comments</h5>
@forelse($team->comments as $comment)
{{ $comment->content }}
@empty
<span>No comments</span>
@endforelse

<form class="mt-3" action="{{ route('createComment', ['team' => $team->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Add comment:</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
        @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection