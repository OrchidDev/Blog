<div class="col-md-4">
    <form class="d-flex" role="search" action="{{ route('post.search') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="جستجو در سایت ..." aria-label="Search" value="{{ request()->search ?? '' }}">
    </form>
</div>
