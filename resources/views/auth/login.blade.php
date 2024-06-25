<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

   
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
        <meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
        <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/page-error-404.html" />
        <meta name="format-detection" content="telephone=no">
        <title>Laravel | Page Login</title>
        <meta name="description" content="Some description for the page"/>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/images/favicon.png') }}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label class="mb-1"><strong>Login</strong></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="mb-1"><strong>Password</strong></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
                <div class="custom-control custom-checkbox ms-1">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Remember my preference
                    </label>
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
        </div>
    </form>
    <script src="{{ asset('public/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('public/js/custom.js') }}"></script>
    <script src="{{ asset('public/js/deznav-init.js') }}"></script>
    <script src="{{ asset('public/js/demo.js') }}"></script>
    <script src="{{ asset('public/js/styleSwitcher.js') }}"></script>
</x-guest-layout> 