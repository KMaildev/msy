</div>

<script src="{{ asset('design/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('design/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('design/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('design/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('design/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('design/dist/js/custom.min.js') }}"></script>

<!--morris JavaScript -->
<script src="{{ asset('design/assets/node_modules/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('design/assets/node_modules/morrisjs/morris.min.js') }}"></script>
<script src="{{ asset('design/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<!-- Popup message jquery -->
<!-- Chart JS -->
<script src="{{ asset('design/dist/js/dashboard1.js') }}"></script>

<script src="{{ asset('design/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('design/assets/node_modules/sweetalert2/sweet-alert.init.js') }}"></script>

<script src="{{ asset('design/assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript">


<script src = "{{ asset('design/assets/node_modules/bootstrap-select/bootstrap-select.min.js') }}"
    type = "text/javascript" >
</script>
</script>

<script>
    $(function() {
        $('#chat, #comment, #todo').perfectScrollbar();
    });
</script>
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

@yield('script')
<script type="text/javascript">
    $('.del_confirm').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            text: "Are you sure you want to delete this record?",
            showCancelButton: true,
            customClass: {
                confirmButton: 'btn btn-primary me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false,
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            console.log(willDelete.value);
            if (willDelete.value === true) {
                form.submit();
            }
        });
    });



    $(function() {
        $(".select2").select2();
    });
</script>

<script type="text/javascript" src="{{ url('ajax/demand.js') }}"></script>
</body>
</html>
