<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    @include('components.include.meta')
    <!-- Styles -->
    @include('components.include.style')
</head>
<body>
    <div class="d-flex" id="wrapper">
        @include('components.include.sidebarAdmin')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            @include('components.include.navbarAdmin')
            <div class="container-fluid">
                <div class="card-body">
                    {{$slot}}
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('components.include.javascript')
</body>
</html>
