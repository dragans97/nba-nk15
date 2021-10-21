<html>

<head>
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    @include('shared.navbar')
    
    <div class='container my-2'>
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row my-2">
            <div class="col-lg-10 col-sm-12">
                @yield('content')
            </div>
            <div class="col-lg-2 col-sm-12" style="border-left:2px solid;">
                Teams with news
                @forelse ($teamsWithNews as $twn)
                    <a href="{{ route('team', ['team'=>$twn->id]) }}}" class="btn btn-success my-1">{{$twn->name}}</a>
                @empty
                    Sorry. Currently there's no teams with posts.
                @endforelse
            </div>
        </div>
    </div>
</body>

</html>