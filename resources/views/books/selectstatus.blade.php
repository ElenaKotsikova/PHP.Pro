<label for="status" class="form-label">Статус</label>
<select class="form-control" id="status" name="status" >
    <option>Выберите Статус</option>
    <option value="{{ \App\Enums\BookStatus::Published }}">Опубликована</option>
    <option value="{{ \App\Enums\BookStatus::Draft }}">Черновик</option>
</select>
