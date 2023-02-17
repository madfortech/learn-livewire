@extends('layouts.app')
@section('section', 'User Homepage')
@section('content') 
        <div class="container">
            <!--End Header Comment-->
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div class="d-flex justify-content-center p-2">
                        <img class="img-fluid rounded-5 rounded-circle" 
                        src="{{asset('img/pexels-uriel-mont-6280957.jpg')}}" alt="alt-image" width="100" 
                        height="100">
                    </div>
                        <div class="text-center my-2">
                            <strong> {{ Auth::user()->name }} </strong>
                        </div>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a class="dropdown-item" href="{{route('profile.edit')}}">
                                    Edit Profile
                                </a>
                            </li>
                            
                        </ul>
                    </div>
            </div>
        </div>
@endsection
