@extends('website.master')

@section('title')
    {{$course->title}}
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($course->image)}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1 class="text-center">{{$course->title}}</h1>
                        <h3>{{$course->teacher->name}}</h3>
                        <h3>{{$course->starting_date}}</h3>
                        @if($course->offer_fee > 0)
                            <h3>Course Regular Fee: Tk. {{$course->fee}}</h3>
                            <h3>Course Offer Fee: Tk. {{$course->offer_fee}}</h3>
                        @else
                            <h3>Course Regular Fee: Tk. {{$course->fee}}</h3>
                        @endif
                        <a href="{{route('enroll-now', ['id' => $course->id])}}" class="btn btn-outline-success px-5">Enroll Now</a>
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
                            {!! $course->detail !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
