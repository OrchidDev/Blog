<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">نشان</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}"><i class="fa-light fa-home"></i> </a>
                </li>
                @foreach($categories as $category)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('category.show', $category->slug) }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$category->name}}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($category->children as $childCategory)
                                <li><a class="dropdown-item" href="{{ route('category.show', $childCategory->slug) }}">{{ $childCategory->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
            @guest()
                <a href="{{ route('login') }}" class="btn btn-primary me-3"><i class="fa-light fa-sign-in"></i> ورود</a>
                <a href="{{ route('register') }}" class="btn btn-primary me-3"><i class="fa-light fa-user-plus"></i> عضویت</a>
            @else
            <div class="btn-group me-3">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-light fa-user"></i> {{auth()->user()->name}}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">نمایه</a></li>
                    <li><a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').submit()">خروج</a></li>
                    <form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form>
                </ul>
            </div>
            @endguest
        </div>
    </div>
</nav>
