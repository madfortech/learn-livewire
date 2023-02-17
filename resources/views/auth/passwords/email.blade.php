@extends('layouts.app')
@section('section', 'Reset Password')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-center mt-2 page-heading">
                            reset password
                        </h1>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" class="px-2" action="{{ route('password.email') }}">
                                @csrf

                                <div class="row gx-0">
                                    <div class="col">
                                        <label class="form-label" for="email">  {{ __('E-Mail Address *') }}</label>
                                        <input class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                        type="email" placeholder="mail@exampe.com" 
                                        value="{{ old('email') }}"
                                        autofocus
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
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-sm" type="submit">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
