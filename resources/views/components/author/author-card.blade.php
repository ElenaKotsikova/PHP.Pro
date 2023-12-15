
    <tr>
        <td>{{$author->id}}</td>
        <td><a href="{{route('author.show',['author'=>$author->id])}}">{{$author->surname}}</a></td>
        <td>{{$author->name}}</td>
        <td>{{$author->patronymic}}</td>
        <td>{{$author->created_at}}</td>
        <td>{{$author->updated_at}}</td>
        <td><a href="{{route('author.edit',['author'=>$author->id])}}" class="btn btn-primary" role="button">Редактировать</a></td>
    </tr>

