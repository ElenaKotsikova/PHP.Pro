<div class="mb-3">
    <label for={{$id}} class="form-label">{{$label}}</label>
    <div class="input-group">
    <textarea
        type={{$type}}
        class="form-control {{ $isInvalid ? 'is-invalid' : '' }}"
        name={{$name}}
        id={{$id}}
        aria-describedby="">
    </textarea>

    @if($isInvalid)
    @foreach($errors as $message)
    <div class="invalid-feedback">{{ $message }}</div>
    @endforeach
    @endif
    </div>
</div>
