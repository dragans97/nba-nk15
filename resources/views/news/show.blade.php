@extends('layouts.app')
@section('title')
    News | {{$news->title}}
@endsection

@section('content')
    <div class="row">
        <article class="col-lg-10 col-sm-12">
            <h1>{{$news->title}}</h1>
            <small>Author: {{$news->user->name}}</small>
            <p class="my-5">{{$news->content}}</p>
        </article>
        <div class="col-lg-2 col-sm-12" style="border-left:1px solid black;">
            <p>Related teams:</p>
            @forelse ($news->team as $team)
              <a href="{{ route('team', ['team'=>$team->id] )}}" class="d-block my-2 btn btn-primary">{{$team->name}}</a>  
            @empty
                There's no related teams for this post.
            @endforelse
        </div>
    </div>
@endsection