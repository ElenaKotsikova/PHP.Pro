<label for="authors" class="form-label">Авторы</label>
<select class="form-control" id="authors" name="author_id">
    <option>Выберите Автора</option>
    @foreach($authors as $author)
    <option name="authors"  value="{{ $author->id }}">{{$author->name}} {{$author->surname}</option>
    @endforeach
</select>
