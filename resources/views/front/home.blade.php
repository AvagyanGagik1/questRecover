@extends('layouts.front.index')


@section('content')
    <div class="main-wrapper ">
        <!-- Slider Start -->
        {{--        to do background image--}}
        <section class="slider" style="background: url({{optional($home)->image}});     background-position: 10% 0;
            background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-10">
                        <div class="block">
                            <h1 class="animated fadeInUp mb-5">{{optional($home)->header}}
                            </h1>
                            <a href="tel:+23-345-67890" class="btn btn-main animated fadeInUp btn-round-full">CALL NOW
                                <i class="fas fa-phone-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Intro Start -->

        <section class="section intro">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2 class="mt-3 content-title">{{optional($home)->title}}</h2>
                        </div>
                        {!! optional($home)->text !!}
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($homeDescription as $description)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="intro-item mb-5 mb-lg-0">
                                <img src="{{$description->image}}" alt="" width="150" height="150">
                                <h4 class="mt-4 mb-3">{{$description->title}}</h4>
                                <p>{!! $description->text !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Intro END -->
        <!-- Section About Start -->

        <section class="section about position-relative">
            <iframe
                class="bg-about"
                style="min-height: 100%"
                src="{{optional($homeVideo)->video_link}}"
                frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 offset-md-0">
                        <div class="about-item ">
                            <h2 class="mt-3 mb-4 position-relative content-title">{{optional($homeVideo)->header}}</h2>
                            <div class="about-content">
                                <h4 class="mb-3 position-relative">{{optional($homeVideo)->title}}</h4>
                                {!! optional($homeVideo)->text  !!}

                                <a href="{{route('front.about')}}" class="btn btn-main btn-round-full mt-5">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section About End -->
        <!-- section Counter Start -->
    {{--        <section class="section counter">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                        <div class="counter-item text-center mb-5 mb-lg-0">--}}
    {{--                            <h3 class="mb-0"><span class="counter-stat font-weight-bold">1730</span> +</h3>--}}
    {{--                            <p class="text-muted">Project Done</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                        <div class="counter-item text-center mb-5 mb-lg-0">--}}
    {{--                            <h3 class="mb-0"><span class="counter-stat font-weight-bold">125 </span>M </h3>--}}
    {{--                            <p class="text-muted">User Worldwide</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                        <div class="counter-item text-center mb-5 mb-lg-0">--}}
    {{--                            <h3 class="mb-0"><span class="counter-stat font-weight-bold">39</span></h3>--}}
    {{--                            <p class="text-muted">Availble Country</p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6 col-sm-6">--}}
    {{--                        <div class="counter-item text-center">--}}
    {{--                            <h3 class="mb-0"><span class="counter-stat font-weight-bold">14</span></h3>--}}
    {{--                            <p class="text-muted">Award Winner </p>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    <!-- section Counter End  -->
        <!--  Section Services Start -->
    @include('front.helpers.blog',['data'=>$treatmentType])

    <!--  Section Services End -->
        <!-- Section Cta Start -->
    @include('front.helpers.parallax')
    <!--  Section Cta End-->
        <!-- Section Testimonial Start -->
        <section class="section testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ">
                        <div class="section-title">
                            <h2 class="mt-3 content-title">Check what's our clients say about us</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row testimonial-wrap">
                    @foreach($story as $item)
                        <div class="testimonial-item position-relative">
                            <i class="ti-quote-left text-color"></i>

                            <div class="testimonial-item-content">
                                <p class="testimonial-text">{!! $item->text !!}</p>

                                <div class="testimonial-author">
                                    <h5 class="mb-0 text-capitalize">{{$item->author}}</h5>
                                    <p>{{optional($item)->short_description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Section Testimonial End -->
        <section class="section latest-blog bg-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="section-title">
                            <h2 class="mt-3 content-title text-white">Latest articles</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    @foreach($article as $item)
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="card bg-transparent border-0">
                                <img src="{{$item->image}}" alt="" class="img-fluid rounded">

                                <div class="card-body mt-2">
                                    <h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white">{{$item->header}}</a></h3>
                                    <a href="{{route('front.article',$item->slug())}}"
                                       class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
{{--        <section class="mt-70 position-relative">--}}
{{--            <div class="container">--}}
{{--                <div class="cta-block-2 bg-white p-5 rounded border-1">--}}
{{--                    <div class="row justify-content-center align-items-center ">--}}
{{--                        <div class="col-lg-7">--}}
{{--                            <span class="text-color">For Every type business</span>--}}
{{--                            <h2 class="mt-2 mb-4 mb-lg-0">Entrust Your Project to Our Best Team of Professionals</h2>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <a href="contact.html" class="btn btn-main btn-round-full float-lg-right ">Contact Us</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </div>
@endsection
