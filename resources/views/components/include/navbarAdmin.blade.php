<nav class="navbar navbar-expand-lg navbar-light">
    <a href="#" id="menu-toggle">
        <span class="navbar-toggler-icon"></span>
    </a>
    <div class="d-flex ms-auto" role="search">
        <button class="btn btn-outline-danger me-4" type="submit" onclick="event.preventDefault(); document.getElementById('logout').submit()"><i class="fa-light fa-sign-out"></i> خروج </button>
        <form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form>
    </div>
</nav>