@extends('layouts.app')
@section('section', 'Login')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-center mt-2 page-heading">
                        {{ __('Login') }}
                        </h1>
                           
                        @if (session('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                        @endif

                        <form method="POST" class="px-2" action="{{ route('login') }}">
                            @csrf

                            <div class="row gx-0">
                                <div class="col">
                                    <label class="form-label" for="email">  {{ __('E-Mail Address *') }}</label>
                                    <input class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                    type="email" placeholder="mail@exampe.com" 
                                    value="{{ old('email') }}"
                                    autofocus
                                    name="email"
                                    required="">
                                    @error('email')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- email -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="form-label" for="password">  {{ __('Password *') }}</label>
                                    <input class="form-control form-control-sm @error('password') is-invalid @enderror" 
                                    type="password" placeholder="password" 
                                    autocomplete="current-password"
                                    name="password"
                                    required="">
                                    @error('password')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- password -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="col-form-label">
                                        <input type="checkbox" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                        &nbsp; {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!-- remember -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                @if (Route::has('password.request'))
                                    <a class="link-primary text-decoration-none" 
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password ?') }}       
                                    </a>
                                @endif
                                </div>
                            </div>
                            <!-- password reset -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-sm" type="submit">login</button>
                                    </div>
                                </div>
                            </div>
  
                        </form>

                        <div class="card border border-2 mt-2 text-center">
                            if you don't have an account 
                            <a class="link-primary text-decoration-none" 
                                href="{{ route('register') }}">
                                {{ __('Register') }}       
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
