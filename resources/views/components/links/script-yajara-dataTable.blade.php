<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            // dom: 'Bfrtip',
            dom: '<"html5buttons"B>lTftigp',

            // "buttons": ["excel", "pdf", "print", "colvis"],
            buttons: [
                'copy',
                'excel',
                'pdf',
                "print",
                {
                    extend: 'print',
                    text: 'Print selected',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis',
                // {
                //     extend: 'print',
                //     text: 'Print all',
                //     exportOptions: {
                //         modifier: {
                //             selected: null
                //         }
                //     }
                // },
                // {
                //     text: 'My custom button',
                //     action: function() {
                //         return view('transactions.print');
                //     }
                // },
            ],
            select: true,
            scrollY: '80vh',
            scrollX: true,
            scrollCollapse: true,
            // lengthMenu: [
            //     [10, 25, 50, 100, -1],
            //     [10, 25, 50, 100, "All"]
            // ],
            pagingType: "full_numbers",
            processing: true,
            serverSide: true,

            // {data: 'action', name: 'action', orderable: false, searchable: false},

            {{ $slot }}
        });
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');





        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": true,
        // });
    });
</script>
<script>
    function Refresh() {
        $('#example1').DataTable().ajax.reload();
        alert('refreshed');
    }
</script>
