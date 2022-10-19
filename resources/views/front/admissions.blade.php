@extends('layouts.front.index')
@section('content')
    <div class="main-wrapper ">
        <section class="section blog-wrap ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <div class="blog-item-content bg-white p-5">
                                        <h2 class="mt-3 mb-4">{{$admissions->title}}</h2>
                                        {!! $admissions->text !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <div class="blog-item-content bg-white p-5">
                                        <h2 class="mt-3 mb-4 text-center">{{$admissions->form_title}}</h2>
                                        <p class="lead mb-4 text-center">{{$admissions->confidential_description}}</p>
                                    </div>
                                </div>
                            </div>
                            @include('front.helpers.benefitForm')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
