@extends('layouts.app')
@section('section', 'Register')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-center mt-2 page-heading">
                            register
                        </h1>
                        <form method="POST" class="px-2" action="{{ route('register') }}">
                            @csrf

                            <div class="row gx-0">
                                <div class="col">
                                    <label class="form-label" for="name">  {{ __('Name *') }}</label>
                                    <input class="form-control form-control-sm @error('name') is-invalid @enderror" 
                                    type="text" placeholder="full name" 
                                    value="{{ old('name') }}"
                                    autofocus
                                    name="name"
                                    autocomplete="name"
                                    required="">
                                    @error('name')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- name -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="form-label" for="email">  {{ __('E-Mail Address *') }}</label>
                                    <input class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                    type="email" placeholder="mail@exampe.com" 
                                    value="{{ old('email') }}"
                                    autocomplete="email"
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
                                    <input id="password" type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    placeholder="password"
                                    required autocomplete="new-password">

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
                                    <label class="form-label" for="password-confirm">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <input class="form-control form-control-sm" 
                                    type="password" name="password_confirmation" 
                                    autocomplete="new-password"
                                    placeholder="confirm password" 
                                    required="">
                                </div>
                            </div>
                            <!-- confirm password -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="col-form-label">
                                        <input type="checkbox" name="accept"
                                        required=""
                                        {{ old('accept') ? 'checked' : '' }}>
                                        &nbsp; {{ __('Terms conditions') }}
                                    </label>
                                </div>
                            </div>
                            <!-- accept -->
                            
                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-sm" type="submit">register</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="card border border-2 mt-2 text-center">
                            all ready have an  account please 
                            <a class="link-primary text-decoration-none" 
                                href="{{ route('login') }}">
                                {{ __('Login') }}       
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
