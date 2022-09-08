@extends('website.master')

@section('title')
    Detail Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset('/website/img/01.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1 class="text-center">PHP with Laravel Framework</h1>
                        <h3>trainer name: Mr. Polash Mia</h3>
                        <h3>trainer name: Mr. Polash Mia</h3>
                        <h3>trainer name: Mr. Polash Mia</h3>
                        <h3>trainer name: Mr. Polash Mia</h3>
                        <a href="" class="btn btn-outline-success px-5">Enroll Now</a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Course Information</h1>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, debitis excepturi facilis fuga illum maxime neque numquam odio voluptatibus?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, debitis excepturi facilis fuga illum maxime neque numquam odio voluptatibus?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, debitis excepturi facilis fuga illum maxime neque numquam odio voluptatibus?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, debitis excepturi facilis fuga illum maxime neque numquam odio voluptatibus?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad, debitis excepturi facilis fuga illum maxime neque numquam odio voluptatibus?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
