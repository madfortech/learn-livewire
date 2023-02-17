@extends('layouts.app')
@section('section', 'Edit Profile')
@section('content')
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div>
                        <h1 class="mt-2 page-heading">
                            update profile
                        </h1>

                        @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif

                        <form class="px-2 form" method="post" 
                            action="{{ route("profile.update") }}">

                            @csrf

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="form-label">Name</label>
                                    <input class="form-control form-control-sm" 
                                    type="text" 
                                    name="name"
                                    value="{{ old('name', auth()->user()->name) }}">
                                </div>
                            </div>
                            <!-- name -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input class="form-control form-control-sm" 
                                    type="email" 
                                    value="{{ old('email', auth()->user()->email) }}"
                                    readonly="">
                                </div>
                            </div>
                            <!-- email -->

                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <a class="link-dark text-decoration-none" href=" {{route('password.edit')}}">
                                        Change password
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

                        <form class="px-2 form" method="post" 
                            action="{{ route("profile.destroy") }}">
                            @csrf
                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn-sm btn-danger" type="submit">
                                            <i class="fas fa-trash"></i>
                                            delete account
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
