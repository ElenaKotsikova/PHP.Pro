<label for="publishers" class="form-label">Публикации</label>
<select class="form-control" id="publishers" name="publisher_id" >
    <option>Выберите Публикацию</option>
    @foreach($publishers as $publisher)
    <option name="publishers"  value="{{ $publisher->id }}">{{$publisher->name }}</option>
    @endforeach
</select>
