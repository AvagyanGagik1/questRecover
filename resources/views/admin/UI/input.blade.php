<div class="form-group">
    <label for="{{$id}}">{{$label}}</label>
    <input type="text" class="form-control" value="{{isset($value)?$value:old($name)}}" id="{{$id}}" placeholder="{{$placeholder}}" name="{{$name}}">
</div>
