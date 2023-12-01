<div class="col-sm">
    <label for="{{$id}}" class="form-label">{{$label}}</label>
    <div class="input-group">
    <input type="{{$type}}"  name="{{$name}}" class="form-control is-invalid" id="{{$id}}" aria-describedby="surname">
   @if($error)
    <div class="valid-feedback">{{$error}}</div>
   @endif
    </div>
    </div>

