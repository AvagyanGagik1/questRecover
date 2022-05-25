<div class="form-group">
    <div class="custom-file">
        <input type="file" @if($multiple) multiple @endif class="custom-file-input action-preview" id="{{$id}}">
        <label class="custom-file-label" for="{{$id}}">{{$label}}</label>
    </div>
</div>
