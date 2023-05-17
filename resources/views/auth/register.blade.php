@extends('layouts.app')

@section('content')

<div class="container fluid h-100">
    <div class="row h-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Create Your Account</h1>
                    <h5 class="lead">
                        Create a customer or tailoring shop account
                    </h5>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Andrew Jones" class="img-fluid rounded-circle" width="132" height="132">
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                     <label>Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

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
                                    <label for="phone_number"> {{ __('Phone Number') }}</label>
                                    <input class="form-control @error('phone_number') is-invalid @enderror" type="text" name="phone_number" placeholder="Enter your phone number" id="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>









                                <div class="form-group">
                                    <label for="password"> {{ __('Password') }}</label>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">


                                </div>




                                <div class="form-group">
                                    <label for="role">{{ __('Role') }}</label>
                                    <select id="role" name="role">
                                        <option value="customer">Customer</option>
                                        <option value="shop owner">Shop Owner</option>
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        {{ __('Register') }}
                                    </button>

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