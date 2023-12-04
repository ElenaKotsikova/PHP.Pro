<form class="form-inline search"  action="{{route($route_value)}}">
    <input
        class="form-control mr-sm-2"
        type="search" placeholder="Search"
        name="q"
        value="{{ request()->q }}"
        aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
