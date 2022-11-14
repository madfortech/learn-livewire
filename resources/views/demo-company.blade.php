
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div>
       @include('navbar.nav')
    </div>

    <main class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8">
                    @livewire('demo-companies', ['designTemplate' => 'bootstrap'])
                </div>
            </div>
        </div>
    </main>
@endsection


                         
