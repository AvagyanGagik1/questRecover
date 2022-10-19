@extends('layouts.front.index')


@section('content')

    <div class="main-wrapper ">
        <section class="section blog-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="section-title">
                                    <h2 class="mt-3 mb-5 content-title ">{{$article->title}}</h2>
                                    <img class="img-fluid" src="{{$article->image}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-5">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <h2 class="btn" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Table of Contents
                                            </h2>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            @php($count=0)
                                            @foreach($article->contents as $content)
                                                @if(!$content->parent_id)
                                                    @php($count++)
                                                    <p>
                                                        <a href="#{{$content->title.$content->id}}">{{$count . '. '.$content->title}}</a>
                                                    </p>
                                                    @php($counter=0)
                                                    @foreach($article->contents as $con)

                                                        @if($content->id === $con->parent_id)
                                                            @php($counter++)
                                                            <p class="pl-5">
                                                                <a href="#{{$content->title.$content->id}}">{{$count . '.'.$counter.'. '.$content->title}}</a>
                                                            </p>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-5">
                            @foreach($article->contents as $content)
                                <div id="{{$content->title.$content->id}}" class="comment-area card border-0 p-5">
                                    <h4 class="mb-4">{{$content->title}}</h4>
                                    <div class="comment-area-box">
                                        <div class="comment-content mt-3">
                                            {!!  $content->content!!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
