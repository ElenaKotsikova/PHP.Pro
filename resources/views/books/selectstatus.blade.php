<label for="status" class="form-label">Статус</label>
<select class="form-control" id="statusList" name="status" >
    <option>Выберите Статус</option>
    @foreach($statusList as $status)
    <option value="$status->key">$status->value</option>
    @endforeach
</select>
