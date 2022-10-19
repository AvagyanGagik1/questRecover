@extends('layouts.front.index')


@section('content')
    <div class="main-wrapper ">
        <section class="section blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <div class="blog-item-content bg-white p-5">
                                        <h2 class="mt-3 mb-4">{{optional($tour)->title}}</h2>
                                        {!! optional($tour)->text !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @foreach($tourHistory as $history)
        <!-- section portfolio start -->
            <section class="section portfolio pb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 text-center">
                            <div class="section-title">
                                <h2 class="mt-3 content-title ">{{$history->title}}</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row portfolio-gallery">
                        @foreach($history->images as $image)
                        <div class="col-lg-4 col-md-6">
                            <div class="portflio-item position-relative mb-4">
                                <a href="{{$image->image}}" class="popup-gallery">
                                    <img src="{{$image->image}}" alt="" class="img-fluid w-100">

                                    <i class="ti-plus overlay-item"></i>
                                    <div class="portfolio-item-content">
                                        <h3 class="mb-0 text-white">Click for Zoom</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </section>
    @endforeach

    </div>
@endsection
