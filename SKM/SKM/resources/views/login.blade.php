<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A700"/>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}"/>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('loginError') }}
    </div>
@endif
<div class="login-container">
  <div class="login-form">
    <h2 class="login-title">Admin</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="username" class="username-label">Username</label>
        <input type="text" id="username" name="username" class="username-input @error('string') is-invalid @enderror" value="{{ old('username') }}" required>
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <label for="password" class="password-label">Password</label>
        <input type="password" id="password" name="password" class="password-input" required>
        <button type="submit" class="login-button">Login</button>
      </form>
  </div>
  <div class="copyright-info">
    <p class="copyright-text">&copy;2023  TI VOK-UB</p>
  </div>
</div>
</body>
</html>
