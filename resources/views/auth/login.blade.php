@extends('auth.main')

@section('title', 'Login')

@section('content')
<div class="container" style="margin-top: 100px">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">
                    Login   
                </div>
                <div class="card-body">
                    <h1 class="mb-3 text-18 te">Sign In</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control form-control-rounded @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" autofocus>
                            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" id="password" type="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a class="text-muted" href="/register">
                            <u>Register</u>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
