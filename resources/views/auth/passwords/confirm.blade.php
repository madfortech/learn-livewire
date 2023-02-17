@extends('layouts.app')
@section('section', 'Confirm Password')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-center mt-2 page-heading">
                            Confirm Password
                        </h1>

                        <div class="card-body text-center">
                            {{ __('Please confirm your password before continuing.') }}

                            <form method="POST" class="px-2"
                                action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="row gx-0">
                                    <div class="col">
                                        <label for="password">
                                            {{ __('Password') }}
                                        </label>
                                        <input id="password" 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        name="password" 
                                        placeholder="password"
                                        autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- password -->

                                <div class="row gx-0 mt-2">
                                    <div class="col">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-sm" type="submit">
                                                {{ __('Confirm Password') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="nav-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
