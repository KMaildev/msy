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
    < script src = "{{ asset('design/assets/node_modules/bootstrap-select/bootstrap-select.min.js') }}"
    type = "text/javascript" >
</script>
</script>

<script src="{{ asset('design/assets/node_modules/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('design/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>

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



    // DataTable

    $(function() {
        $('#myTable').DataTable();
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group +
                            '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
        // responsive table
        $('#config-table').DataTable({
            responsive: true,
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'All']
            ]
        });

        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass(
            'btn btn-primary me-1');
    });
</script>

<script type="text/javascript" src="{{ url('ajax/demand.js') }}"></script>
</body>

</html>
