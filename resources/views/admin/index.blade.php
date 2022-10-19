@extends('layouts.app')

@section('content')
    <div class="row">
        @if((empty($table->model) || (!in_array($table->model,\App\Models\Helpers\UiConstants::SINGLE_MODELS) && count($table->data))) && (request()->route()->getName() !== 'admin.benefit' && request()->route()->getName() !== 'admin.callback'))
            <div class="col-12">
                <a href="{{route(strtok(Route::currentRouteName(), '.').'.create')}}"
                   class="btn btn-success m-3">Create</a>
            </div>
        @endif
    </div>

    @include('admin.table.index',['table'=>$table])
@endsection
