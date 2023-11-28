<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('students') }}">Students List</a>
                </li>
            </ul>

            @if (Auth::user())

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-responsive-nav-link href="{{ route('logout') }}"
                    @click.prevent="$root.submit();">
                    <button class="btn btn-danger btn-sm">{{ __('Log Out') }}</button>
                </x-responsive-nav-link>
            </form>

            @else

            <span class="mr-2"><a href="{{ route('login') }}" class="btn btn-primary">Login</a></span>
            <span><a href="{{ route('register') }}" class="btn btn-success">Register</a></span>
            @endif

        </div>
    </div>
</nav>
