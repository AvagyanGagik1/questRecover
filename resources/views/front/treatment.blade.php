@extends('layouts.front.index')


@section('content')
    <div class="main-wrapper ">
        <section class="section about-2 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-item pr-3 mb-5 mb-lg-0">
                            <h2 class="mt-3 mb-4 position-relative content-title">{{optional($treatment)->title}}</h2>
                            <p class="mb-5">{!! optional($treatment)->text !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-item-img">
                            <img src="images/about/home-7.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <div class="blog-item-content bg-white p-5">
                                        <h2 class="mt-3 mb-4">{{optional($treatmentDescription)->title}}</h2>
                                       {!! optional($treatmentDescription)->text !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        @include('front.helpers.blog',['data'=>$treatmentType])
    </div>
@endsection
