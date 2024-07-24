@extends('layouts.app')

@section('content')
<div class="container-scroller">
    <div class="container-fluid">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        @if (session('status'))
                            <div class="alert alert-success mb-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3 class="card-title text-left mb-3">Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control p_input @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control p_input @error('password') is-invalid @enderror"  placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check"><label><input type="checkbox" name="remember" id="remember" class="form-check-input">Remember me</label></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                            </div>
                            <br>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="google-login btn btn-create-account btn-block">Create An Account</a>
                            @endif
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="btn btn-link">Forgot Your Password?</a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
