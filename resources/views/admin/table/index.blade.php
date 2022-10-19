<div class="row">
    <div class="col-12">
        @if(!empty($table->headers) || !empty($table->data))
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-capitalize">{{$table->title}}</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" name="table_search" class="form-control float-right"
                                   placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>

                            @foreach($table->headers as $header)
                                <th class="text-capitalize">{{$header}}</th>
                            @endforeach
                            @if(request()->route()->getName() !== 'admin.benefit' && request()->route()->getName() !== 'admin.callback')
                                <th class="text-capitalize">update</th>
                                <th class="text-capitalize">delete</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($table->data as $value)
                            <tr>
                                @foreach($value as $key => $item)
                                    @if($key === 'updated_at' || $key === 'created_at')
                                        <td>{{\Carbon\Carbon::parse($item)->format('d.m.Y')}}</td>
                                    @elseif($key === 'text' || $key === 'content' || $key === 'description')
                                        <td>{!!  $item!!}</td>
                                    @elseif($key === 'image')
                                        <td><img class="scale-images" src="{{$item}}" alt="{{$item}}" width="100"></td>
                                    @else
                                        <td>{{  $item}}</td>
                                    @endif
                                @endforeach
                                @if(request()->route()->getName() !== 'admin.benefit' && request()->route()->getName() !== 'admin.callback')
                                    <td><a class="btn"
                                           href="{{route(strtok(Route::currentRouteName(), '.').'.edit',$value['id'])}}"><i
                                                style="color: dodgerblue" class="fas fa-edit"></i></a></td>
                                    <td>
                                        <button class="btn action-delete" data-title="{{$table->title}}"
                                                data-action="{{route(strtok(Route::currentRouteName(), '.').'.destroy',$value['id'])}}">
                                            <i style="color: red" class="fas fa-trash"></i></button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

            @include('admin.UI.modal.imageScale')
            @include('admin.UI.modal.delete')
        @else
            @include('admin.table.noData')
        @endif
    </div>
</div>
