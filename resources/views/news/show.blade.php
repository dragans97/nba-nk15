@extends('layouts.app')
@section('title')
    News | {{$news->title}}
@endsection

@section('content')
    <article>
        <h1>{{$news->title}}</h1>
        <small>Author: {{$news->user->name}}</small>
        <p class="my-5">{{$news->content}}</p>
    </article>
@endsection