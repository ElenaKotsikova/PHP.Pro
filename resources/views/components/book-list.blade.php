<a  href="{{route('BookForm')}}" class="btn btn-primary add_author" role="button" >Добавление книги</a>
<div class="book-list">
    @foreach($books as $book)
    <x-book-card :book="$book" />
    @endforeach
</div>
