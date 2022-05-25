<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-capitalize">{{$table->title}}</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($table->data as $value)
                        <tr>
                            @foreach($value as $key => $item)
                                @if($key === 'updated_at' || $key === 'created_at')
                                    <td>{{\Carbon\Carbon::parse($item)->format('d.m.Y')}}</td>
                                @else
                                    <td>{{$item}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
