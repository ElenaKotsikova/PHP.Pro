
    <tr>
        <td>{{$author->id}}</td>
        <td><a href="{{route('author.show',['author'=>$author->id])}}">{{$author->surname}}</a></td>
        <td>{{$author->name}}</td>
        <td>{{$author->patronymic}}</td>
        <td>{{$author->created_at}}</td>
        <td>{{$author->updated_at}}</td>
        <td><button type="button" class="btn btn-primary">Редактировать</button</td>
    </tr>

