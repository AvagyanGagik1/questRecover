@extends('layouts.front.index')


@section('content')
    <div class="main-wrapper ">

        <!-- Section About Start -->
        <section class="section about-2 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-item pr-3 mb-5 mb-lg-0">
                            <h2 class="mt-3 mb-4 position-relative content-title">{{optional($about)->title}}</h2>
                            <p class="mb-5">{!! optional($about)->text !!}</p>
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

        <!-- Section About End -->

        <section class="about-info section pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($aboutDescription as $item)
                        <div class="col-lg-4 col-md-4">
                            <div class="intro-item mb-4 mb-lg-0">
                                <img src="{{$item->image}}" width="200" alt="">
                                <h4 class="mt-4">{{$item->title}}</h4>
                                <p>{!! $item->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    @foreach($teamType as $team)
        <!--  Section Services Start -->
            <section class="section team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 text-center">
                            <div class="section-title">
                                <h2 class="mt-3 content-title">{{$team->name}}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        @foreach($team->team as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="team-item-wrap mb-5">
                                    <div class="team-item position-relative">
                                        <img src="{{$item->image}}" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="team-item-content">
                                        <h4 class="mt-3 mb-0 text-capitalize">{{$item->name}}</h4>
                                        <p>{{$item->position->name}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--  Section Services End -->
        @endforeach
    </div>
@endsection
