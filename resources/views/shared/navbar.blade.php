<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/teams">
            Teams
        </a>
        <div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
        <div>
            <a href="/login" class="nav-link">Login</a>
        </div>
        <div>
            <a href="/register" class="nav-link">Register</a>
        </div>
    </div>
</nav>