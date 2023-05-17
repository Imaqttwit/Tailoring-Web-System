@extends('layouts.app')

@section('content')

<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Welcome back!</h1>
                    <h5 class="lead">
                        Sign in to your account to continue
                    </h5>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Andrew Jones" class="img-fluid rounded-circle" width="132" height="132">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <small>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox align-items-center">
                                        <input type="checkbox" class="custom-control-input" value="remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="rem custom-control-label text-small" for="Remember me next time">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary"> {{ __('Login') }} </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-color: #DCDCDC;
        margin-top: 20px;
    }

    .card {
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #e5e9f2;
        border-radius: .2rem;
    }
</style>
@endsection