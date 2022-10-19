<div @if($multiple) multiple @endif class="form-group">
    <label>{{$label}}</label>

    <select name="{{$name}}" class="custom-select">
        <option value="" @if(!isset($value)) selected @endif>null</option>
        @foreach($data as $key=>$datum)
            <option @if(isset($value)?$value === $datum['id']:(old($name)?old($name) == $datum['id']:$key===0)) selected @endif value="{{$datum['id']}}">{{$datum['name']??$datum['header']??$datum['title']}}</option>
        @endforeach
    </select>
</div>
