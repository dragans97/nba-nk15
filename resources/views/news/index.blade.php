@extends('layouts.app')
@section('title', 'News')
    
@section('content')
   <h1>News</h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, excepturi!</p>
   <hr>
  <div class="row">
    @forelse ($news as $item)
        <article class="col-lg-4 col-sm-12 my-4">
            <h2 style="font-size: 16pt;">
                {{$item->title}}
                <span class="d-block text-muted" style="font-size: 8pt;">{{$item->user->name}}</span>
            </h2>
            <p>{{ \Illuminate\Support\Str::limit($item->content, 100, $end = "...") }}</p>
            <a href="{{ route('show-article', ['news' => $item->id ]) }}" class="d-block my-2 btn btn-dark">Read article</a>
        </article>
    @empty
       <div class="col-12">
           <p>Sorry, there's no articles for now.. Please try again later. :)</p>
       </div>
    @endforelse 
    <div class="col-12 my-4">
        {{ $news->links() }}
    </div>
  </div>
@endsection