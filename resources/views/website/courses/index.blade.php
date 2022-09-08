@extends('website.master')

@section('title')
    All Course Info
@endsection

@section('body')
    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Our All Training Course</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body h-75">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body h-100">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body h-75">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="{{asset('website/img/course-1.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body h-100">
                            <h2>Java Programming</h2>
                            <p>Tk. 12410</p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam consequuntur cupiditate delectus, ducimus earum fuga inventore molestias</p>
                            <a href="{{route('course-detail')}}" class="btn btn-outline-primary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
