<header>
    <nav class="container-fluid">
        <ul>
            <li>
                <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">I miei film</a>
            </li>
        </ul>
    </nav>
</header>
