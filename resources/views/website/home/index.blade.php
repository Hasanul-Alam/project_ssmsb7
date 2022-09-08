@extends('website.master')

@section('title')
    Simple Student Management System
@endsection

@section('body')
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#slider" data-bs-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/website/img/img_3.jpg')}}" alt="" class="w-100"/>
                <div class="carousel-caption">
                    <h1>PHP with Laravel Framework</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur earum facilis illo libero quae tempora? Debitis dolore doloremque eveniet, id illo iste laudantium minus neque nihil perferendis repellat sint.</p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/website/img/img_4.jpg')}}" alt="" class="w-100"/>
                <div class="carousel-caption">
                    <h1>Responsive & Friendly Web Design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur earum facilis illo libero quae tempora? Debitis dolore doloremque eveniet, id illo iste laudantium minus neque nihil perferendis repellat sint.</p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/website/img/img_1.jpg')}}" alt="" class="w-100"/>
                <div class="carousel-caption">
                    <h1>Android App Development</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur earum facilis illo libero quae tempora? Debitis dolore doloremque eveniet, id illo iste laudantium minus neque nihil perferendis repellat sint.</p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Our Popular Course</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/website/img/offer-bg.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Responsive Web Design</h3>
                            <h5>Md. Abdul Karim</h5>
                            <p>Starting Date: 12.09.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/website/img/offer-bg.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Responsive Web Design</h3>
                            <h5>Md. Abdul Karim</h5>
                            <p>Starting Date: 12.09.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/website/img/offer-bg.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Responsive Web Design</h3>
                            <h5>Md. Abdul Karim</h5>
                            <p>Starting Date: 12.09.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-white text-center">Recent Courses</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/website/img/ng-ex.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Md. Sahin Alam</h5>
                            <p>Tk. 12400</p>
                            <p>Starting Date: 25.09.2022</p>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/website/img/ng-ex.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Md. Sahin Alam</h5>
                            <p>Tk. 12400</p>
                            <p>Starting Date: 25.09.2022</p>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/website/img/ng-ex.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>Android App Development</h4>
                            <h5>Md. Sahin Alam</h5>
                            <p>Tk. 12400</p>
                            <p>Starting Date: 25.09.2022</p>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
