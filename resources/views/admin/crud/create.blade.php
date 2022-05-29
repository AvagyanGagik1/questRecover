@extends('layouts.app')

@section('content')
    @include('admin.UI.header')
    <section class="content">
        <div class="container-fluid">
            <form action="">
                <div class="row">
                    <div class="col-6">
                        <div class="card-body">
                            @foreach($response as $res)
                                @include($res->type,['id'=>$res->id,'label'=>$res->label,'placeholder'=>$res->placeholder,'name'=>$res->name,'multiple'=>$res->multiple])
                            @endforeach
                        </div>

                        @include('admin.UI.buttons.submit')

                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
