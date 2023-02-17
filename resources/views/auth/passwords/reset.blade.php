@extends('layouts.app')
@section('section', 'Reset Password')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-center mt-2 page-heading">
                        {{ __('Reset Password') }}
                        </h1>
                        <form method="POST" 
                            class="px-2"
                            action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row gx-0">
                                <div class="col">
                                    <label for="email" class="form-label" >{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" 
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                    name="email" value="{{ $email ?? old('email') }}" 
                                    readonly=""
                                    autocomplete="email" 
                                    autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- email -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label for="password" class="form-label">{{ __('Password *') }}</label>
                                    <input id="password" 
                                    type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" 
                                    name="password" 
                                    required 
                                    placeholder="new password"
                                    autocomplete="new-password">

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
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password *') }}</label>

                                    <input id="password-confirm" type="password" 
                                    class="form-control form-control-sm" name="password_confirmation" 
                                    required 
                                    placeholder="confirm password"
                                    autocomplete="new-password">
                                </div>
                            </div>
                            <!-- confirm password -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-sm" type="submit">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
 
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
