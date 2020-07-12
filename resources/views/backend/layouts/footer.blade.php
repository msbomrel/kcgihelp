<script src="{{asset('backend/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/lib/toastr/toastr.min.js')}}"></script>
<script src="{{asset('backend/js/lib/moment/moment.js')}}"></script>
<script src="{{asset('backend/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('backend/calendar/fullcalendar-init.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
@yield('scripts')

