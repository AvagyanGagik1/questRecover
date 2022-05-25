@extends('layouts.app')

@section('content')
   @include('admin.table.index',['title'=>'example','headers'=>['id','data','example'],'data'=>['id','data','example']])
@endsection
