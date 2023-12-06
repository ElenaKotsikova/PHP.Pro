<div class="book-list">
    @foreach($books as $book)
    <x-book.book-card :book="$book" />
    @endforeach
</div>

