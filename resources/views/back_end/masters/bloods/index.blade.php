@extends('back_end.layouts.app')

@section('PageHead', 'Bloods')

@section('PageTitle', 'Bloods')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/blood">Bloods</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminLinks/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLinks/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLinks/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('actionTitle', 'Bloods Index')
@section('mainContent')
    <div class="card">
        <div class="card-header">
            <span class="float-right">
                {{-- <a href="{{ route('setting.create') }}" class="btn btn-sm btn-success ml-1 ">New setting</a> --}}
            </span>
            <span class="float-right">
                @can('Create Blood')
                    <a href="{{ route('blood.create') }}" class="fa-solid fa-circle-plus"></a>
                @endcan
            </span>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            @can('Read Blood')
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SN</th>
                            @can('Read Blood Name')
                                <th>Name</th>
                            @endcan
                            @can('Read Blood Description')
                                <th>Description</th>
                            @endcan
                            @can('Read Blood Status')
                                <th>Status</th>
                            @endcan
                            @can('Read Blood Created By')
                                <th>Created By</th>
                            @endcan
                            @can('Read Blood Updated By')
                                <th>Updated By</th>
                            @endcan
                            @can('Read Blood Created At')
                                <th>Created At</th>
                            @endcan
                            @can('Read Blood Updated At')
                                <th>Updated At</th>
                            @endcan
                            @can('Edit Blood')
                                <th>Edit</th>
                            @endcan
                            @can('Delete Blood')
                                <th>Delete</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bloods as $key => $blood)
                            <tr>
                                <td>{{ ++$i }}</td>
                                @can('Read Blood Name')
                                    <td>{{ $blood->name }}</td>
                                @endcan
                                @can('Read Blood Description')
                                    <td>{{ $blood->description }}</td>
                                @endcan
                                @can('Read Blood Status')
                                    <td>
                                        @if ($blood->status == '1')
                                            <span
                                                style="background-color: #04AA6D;color: white;padding: 3px;width:100px;">Active</span>
                                        @else
                                            <span style="background-color: #ff9800;color: white;padding: 3px;width:100px;">In
                                                Active</span>
                                        @endif
                                    </td>
                                @endcan
                                @can('Read Blood Created By')
                                    <td>{{ $blood->createdBy->name }}</td>
                                @endcan
                                @can('Read Blood Updated By')
                                    <td>{{ $blood->updatedBy->name }}</td>
                                @endcan
                                @can('Read Blood Created At')
                                    <td>{{ $blood->created_at->format('d-M-Y , h:i:s A') }}</td>
                                @endcan
                                @can('Read Blood Updated At')
                                    <td>{{ $blood->updated_at->format('d-M-Y , h:i:s A') }}</td>
                                @endcan
                                @can('Delete Blood')
                                    <td>
                                        <a href="{{ route('blood.edit', $blood->id) }}" class="ml-2">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                    </td>
                                @endcan
                                @can('Delete Blood')
                                    <td>
                                        <form method="POST" action="{{ route('blood.destroy', $blood->id) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-link" type="submit"><i
                                                    class="fa-solid fa-trash-can text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SN</th>
                            @can('Read Blood Name')
                                <th>Name</th>
                            @endcan
                            @can('Read Blood Description')
                                <th>Description</th>
                            @endcan
                            @can('Read Blood Status')
                                <th>Status</th>
                            @endcan
                            @can('Read Blood Created By')
                                <th>Created By</th>
                            @endcan
                            @can('Read Blood Updated By')
                                <th>Updated By</th>
                            @endcan
                            @can('Read Blood Created At')
                                <th>Created At</th>
                            @endcan
                            @can('Read Blood Updated At')
                                <th>Updated At</th>
                            @endcan
                            @can('Edit Blood')
                                <th>Edit</th>
                            @endcan
                            @can('Delete Blood')
                                <th>Delete</th>
                            @endcan
                        </tr>
                    </tfoot>
                </table>
            @endcan
        </div>
        <!-- /.card-body -->
    </div>

@endsection
@section('actionFooter', 'Footer')
@section('footerLinks')

    @if (Session::has('message_store'))
        <script>
            toastr.success("{!! Session::get('message_store') !!}");
        </script>
    @endif

    @if (Session::has('message_update'))
        <script>
            toastr.success("{!! Session::get('message_update') !!}");
        </script>
    @endif

    @if ($errors->count() > 0)
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}");
            </script>
        @endforeach
    @endif
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('adminLinks/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminLinks/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                @can('Table Buttons Blood')
                    "buttons": [
                        @can('Table Export Excel Blood')
                            "excel"
                        @endcan ,
                        @can('Table Export PDF Blood')
                            "pdf"
                        @endcan ,
                        @can('Table Print Blood')
                            "print",
                        @endcan
                        @can('Table Column Hide Blood')
                            "colvis"
                        @endcan
                    ]
                @endcan
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
