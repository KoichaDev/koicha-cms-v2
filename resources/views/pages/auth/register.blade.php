<x-includes.head />

<main class="register-page">
    <h1>Register your account</h1>
    <form action="{{ route('register') }}" method="post" class="register-page__form">
        @csrf
        <label for="first-name">First Name</label>
        <input type="text" name="first_name" id="first-name" placeholder="Enter your first name"
               value="{{ old('first_name') }}">

        @error('first_name')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

        <label for="last-name">Last Name</label>
        <input type="text" name="last_name" id="last-name" placeholder="Enter your last name"
               value="{{ old('last_name') }}">

        @error('last_name')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Add your username"
               value="{{ old('username') }}">

        @error('username')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

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
        <input type="password" name="password" id="password" placeholder="create a unique password">

        @error('password')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

        <label for="password-confirmation">Password again</label>
        <input type="password" name="password_confirmation" id="password-confirmation"
               placeholder="Repeat your password">

        @error('password_confirmation')
            <div style="color: red;">
                <p>
                    {{ $message }}
                </p>
            </div>
        @enderror

        <button type="submit">Register</button>
    </form>
</main>

<x-includes.footer />
