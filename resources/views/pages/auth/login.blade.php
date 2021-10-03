<x-includes.head />

<main class="login-page">
    <h1>Login to your account</h1>
    {{-- This is Laravel session helper to check if we have a key. It will flash message that put something inside a session temporarily --}}
    @if (session()->has('status'))
        {{ session('status') }}
    @endif
    <form action="{{ route('login') }}" method="post" class="login-page__form">
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Add your email" value="{{ old('email') }}">

        @error('email')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">

        @error('password')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

        <button type="submit">Login</button>
    </form>
</main>

<x-includes.footer />
