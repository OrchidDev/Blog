<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار</div>
    <div class="mt-4 mb-4 text-center">
        <i class="fa-light fa-user fa-4x"></i>
        <h1 class="fs-6 fw-bold mt-3">نام: {{auth()->user()->name}}</h1>
        <h1 class="fs-6 fw-bold mt-3">نقش : {{auth()->user()->getRole()}}</h1>
    </div>
    <div class="text-center mb-3">
        <a href="{{route('admin')}}" class="text-dark"><i class="fa-light fa-home fa-2x"></i></a>
    </div>
    <div class="list-group list-group-flush">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @if(auth()->user()->role === 'admin')
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#2" aria-expanded="false" aria-controls="flush-collapseTwo">
                            کاربران
                        </button>
                    </h2>
                    <div id="2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li class="mb-2"><a href="{{ route('users.index') }}" class="text-decoration-none text-dark">مدیریت کاربران</a></li>
                                <li class="mb-2"><a href="{{ route('users.create') }}" class="text-decoration-none text-dark">افزودن کاربر</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            @if(auth()->user()->role === 'admin')
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#3" aria-expanded="false" aria-controls="flush-collapseThree">
                        دسته بندی ها
                    </button>
                </h2>
                <div id="3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li><a href="{{ route('categories.index') }}" class="text-decoration-none text-dark">مدیریت دسته بندی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author')
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#4" aria-expanded="false" aria-controls="flush-collapseThree">
                        نوشته ها
                    </button>
                </h2>
                <div id="4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li><a href="{{ route('posts.index') }}" class="text-decoration-none text-dark">مدیریت نوشته ها</a></li>
                            <li><a href="{{ route('posts.create') }}" class="text-decoration-none text-dark">افزودن نوشته</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @if(auth()->user()->role === 'admin')
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#5" aria-expanded="false" aria-controls="flush-collapseThree">
                        نظرات
                    </button>
                </h2>
                <div id="5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li><a href="{{ route('comments.index') }}" class="text-decoration-none text-dark">مدیریت نظرات</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
