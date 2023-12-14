

<label for="authors" class="form-label">Авторы</label>
<select class="form-control" id="authors" name="authors">
    <option>Выберите Автора</option>
    @foreach($authors as $author)
    dd($authors)

    @endforeach
</select>
