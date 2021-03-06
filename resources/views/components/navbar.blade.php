<div class="navbar-container">
    <nav class="navbar">
        <img src="{{ asset('img/notes-logo.svg') }}"
             alt="Laravel Todo App Logo"
             width="30"
             height="30"
             class="navbar__image">
        <p>Laravel Todo App</p>
        @auth
            <p>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
            <a href="{{ route('logout') }}" class="no-underline">Logout</a>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="navbar__login no-underline">Login</a>
            <a href="{{ route('register') }}" class="no-underline">Signup</a>
        @endguest
    </nav>
</div>
