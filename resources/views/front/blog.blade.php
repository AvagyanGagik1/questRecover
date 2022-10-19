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
                                        <h2 class="mt-3 mb-4">{{$blog->title}}</h2>
                                        {!! $blog->text !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($article as $item)
                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">
                                <img src="{{$item->image}}" alt="" class="img-fluid rounded">

                                <div class="blog-item-content bg-white p-5">
                                    <h3 class="mt-3 mb-3">{{$item->header}}</h3>


                                    <a href="{{route('front.article',$item->slug())}}" class="btn btn-small btn-main btn-round-full">{{$item->header}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--pagination--}}
                {{--                <div class="row justify-content-center mt-5">--}}
                {{--                    <div class="col-lg-6 text-center">--}}
                {{--                        <nav class="navigation pagination d-inline-block">--}}
                {{--                            <div class="nav-links">--}}
                {{--                                <a class="prev page-numbers" href="#">Prev</a>--}}
                {{--                                <span aria-current="page" class="page-numbers current">1</span>--}}
                {{--                                <a class="page-numbers" href="#">2</a>--}}
                {{--                                <a class="next page-numbers" href="#">Next</a>--}}
                {{--                            </div>--}}
                {{--                        </nav>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </section>
    </div>
@endsection
