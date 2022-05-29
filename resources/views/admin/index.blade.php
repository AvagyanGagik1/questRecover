@extends('layouts.app')

@section('content')
   @include('admin.table.index',['table'=>$table])
@endsection
