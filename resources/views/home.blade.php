@extends('layouts.app')
@section('section', 'Homepage')
@section('content') 
        <div class="container">
            <!--End Header Comment-->
            <div class="row gx-0">
                <div class="col-md-6">
                    <div> {{ Auth::user()->email }} </div>
                </div>
            </div>
        </div>
@endsection
