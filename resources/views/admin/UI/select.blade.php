<div @if($multiple) multiple @endif class="form-group">
    <label>{{$label}}</label>
    <select class="custom-select">
        @foreach($data as $key=>$datum)
            <option value="{{$key}}">{{$datum}}</option>
        @endforeach
    </select>
</div>
