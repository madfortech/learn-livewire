@extends('layouts.app')
@section('section', 'Edit Password')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div>
                        <h1 class="mt-2 page-heading">
                            update password
                        </h1>
                        
                        @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        
                        <form class="px-2 form" method="post" 
                            action="{{ route("password.change") }}">

                            @csrf

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="form-label">Password *</label>
                                    <input class="form-control form-control-sm {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                                    type="password" 
                                    placeholder="new password"
                                    name="password">
                                    @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- password -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="form-label">Confirm password *</label>
                                    <input class="form-control form-control-sm {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" 
                                    type="password" 
                                    placeholder="confirm password"
                                    name="password_confirmation">
                                </div>
                            </div>
                            <!-- password -->

                            

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <a class="link-dark text-decoration-none" href=" {{route('profile.edit')}}">
                                        edit profile
                                    </a>
                                </div>
                            </div>

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-sm" type="submit">
                                            <i class="fas fa-save"></i>
                                            update
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
