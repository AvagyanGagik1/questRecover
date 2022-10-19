<div class="form-group">
    <div class="custom-file" style="height: auto">
        <input name="{{$name}}@if($multiple)[]@endif" type="file" @if($multiple) multiple
               @endif class="custom-file-input action-preview" id="{{$id}}">
        <label class="custom-file-label" for="{{$id}}">{{$label}}</label>
        <div id="image-preview">
            @if(isset($value) && !is_array($value))
                <img class="scale-images" src="{{$value}}" alt="{{$value}}" width="200">
            @elseif(isset($value) && is_array($value))
                @foreach($value as $item)
                    <img class="scale-images" src="{{$item['image']}}" alt="{{$item['image']}}" width="200">
                @endforeach
            @endif
        </div>
    </div>
</div>
