@extends('layouts.app')
@section('section', 'Verify Email')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <h1 class="text-center mt-2 page-heading">
                        {{ __('Verify Your Email Address') }}
                        </h1>
                           
                        @if (session('recent'))
                        <div class="alert alert-success">
                            {{ session('A fresh verification link has been sent 
                                to your email address') 
                            }}
                        </div>
                        @endif
 

                        <p class="text-center">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                        </p>

                        <form class="px-2" 
                            method="POST" 
                            action="{{ route('verification.resend') }}">
                            @csrf

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-sm" type="submit">
                                            {{ __('click here to request another') }}
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
