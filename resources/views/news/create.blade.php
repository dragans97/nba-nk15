@extends('layouts.app')
@section('title', 'Create News')
    
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form action="/news" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input placeholder="Enter title" required id="title" name="title" type="text" class="form-control">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="content">Content</label>
                    <textarea placeholder="Write your article..." name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
        
                <div class="form-group mb-3">
                    <p>Select related teams for this news:</p>
                    @foreach($teams as $team)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="team-{{$team->id}}" name="teams[]" value="{{$team->id}}">
                        <label for="team-{{$team->id}}" class="form-check-label">{{$team->name}}</label>
                    </div>
                    @endforeach
                    @error('teams')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
@endsection