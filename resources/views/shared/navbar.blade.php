<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        @auth
        <a class="navbar-brand" href="/teams">
            Teams
        </a>
        <div>
            {{ auth()->user()->name }}
        </div>
        <div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
        @else
        <div>
            <a href="/login" class="nav-link">Login</a>
        </div>
        <div>
            <a href="/register" class="nav-link">Register</a>
        </div>
        @endauth
    </div>
</nav>