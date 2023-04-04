<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{asset('js/froala_editor.pkgd.min.js')}}"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "progressBar" : true
        }
        toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "progressBar" : true
        }
        toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "progressBar" : true
        }
        toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "progressBar" : true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

<script>
    var editor = new FroalaEditor('#editor');
</script>
