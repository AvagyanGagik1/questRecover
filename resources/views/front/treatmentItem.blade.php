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

                                        @foreach($treatmentType->treatmentContent as $treatment)
                                            <h2 class="mt-3 mb-4">{{$treatment->block_name}}</h2>
                                            {!! $treatment->text !!}

                                        @endforeach


                                    </div>
                                </div>
                            </div>


@include('front.helpers.callback')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
