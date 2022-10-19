@extends('layouts.front.index')


@section('content')
    <div class="main-wrapper ">
        <section class="section portfolio pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2 class="mt-3 content-title ">{{$testimonials->title}}</h2>
                            {!! $testimonials->text !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row col-lg-10 col-md-12 m-auto">
                    @foreach($testimonialsHistory as $video)
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative mb-4 ">
                            <iframe
                                style="min-height: 334px;width: 100%"
                                src="{{optional($video)->video_link}}"
                                frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
