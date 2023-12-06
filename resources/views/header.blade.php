<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="{{route('home.index')}}">Главная</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link "  href="{{route('books.index')}}">Книги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('author.index')}}">Авторы</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.login') }}">Вход</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.logout') }}">Выход</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
    @if (request()->path() === '/' or request()->path() === 'books' or request()->path() === 'books/search')
        @include ('search',['route_value'=> 'book.search'])
    @endif
    @if (request()->path() === 'authors' or request()->path() === 'authors/search')
    @include ('search',['route_value'=> 'author.search'])
    @endif
</nav>
