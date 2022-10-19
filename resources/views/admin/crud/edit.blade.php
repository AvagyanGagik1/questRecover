@extends('layouts.app')

@section('content')
    @include('admin.UI.header')
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <form action="{{route(strtok(Route::currentRouteName(), '.').'.update',$model['id'])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="card-body">
                            @foreach($response as $res)
                                @include($res->type,['id'=>$res->id,'label'=>$res->label,'placeholder'=>$res->placeholder,'name'=>$res->name,'multiple'=>$res->multiple,'value'=>$model[$res->name]??null,'data'=>$res->data??[]])
                            @endforeach
                        </div>

                        @include('admin.UI.buttons.submit')

                    </div>
                </div>
            </form>
                @include('admin.UI.modal.imageScale')

        </div>
    </section>
@endsection
