<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار</div>
    <div class="mt-4 mb-4 text-center">
        <i class="fa-light fa-user fa-4x"></i>
        <h1 class="fs-6 fw-bold mt-3">نام: </h1>
        <h1 class="fs-6 fw-bold mt-3">نقش : </h1>
    </div>
    <div class="list-group list-group-flush">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#1" aria-expanded="false" aria-controls="flush-collapseOne">
                        صفحه اصلی
                    </button>
                </h2>
                <div id="1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#2" aria-expanded="false" aria-controls="flush-collapseTwo">
                        کاربران
                    </button>
                </h2>
                <div id="2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li class="mb-2"><a href="{{ route('users.index') }}" class="text-decoration-none text-dark">لیست کاربران</a></li>
                            <li class="mb-2"><a href="{{ route('users.create') }}" class="text-decoration-none text-dark">افزودن کاربر</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#3" aria-expanded="false" aria-controls="flush-collapseThree">
                        نوشته ها
                    </button>
                </h2>
                <div id="3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#4" aria-expanded="false" aria-controls="flush-collapseThree">
                        نظرات
                    </button>
                </h2>
                <div id="4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
