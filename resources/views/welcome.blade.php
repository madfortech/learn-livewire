@extends('layouts.app')
@section('section', 'Welcome')
@section('content')
        <div class="container">
            <header>
                <div class="container">
                    <div class="row gx-0">
                        <div class="col-md-12">
                            <h1 class="text-capitalize text-center page-heading mt-2">
                                search music free download
                            </h1>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Header Comment-->
            <div class="row gx-0">
                <div class="col-md-6 offset-md-3">
                    <div>
                        <form class="px-2" method="post" enctype="multipart/form-data">
                            <div class="row gx-0">
                                <div class="col">
                                    <input class="form-control form-control-sm" type="search" 
                                    name="search" placeholder="search music ....!" required="">
                                </div>
                            </div>
                            <div class="row gx-0 mt-2">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-sm" type="submit">
                                            search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- search -->

        <!-- list of search data here -->
        <section class="mt-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-12">
                    <div>
                        <h2 class="text-capitalize mt-2">music here</h2>
                        <div class="d-flex music-wrp p-2">
                            <div class="flex-shrink-0"><img class="img-fluid" 
                            src="{{asset('img/pexels-uriel-mont-6280957.jpg')}}" width="100"></div>
                            <div class="flex-grow-1 ms-3">
                                <h3>your title here</h3>
                                <p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fas fa-download"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
@endsection

