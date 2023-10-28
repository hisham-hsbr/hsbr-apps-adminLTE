@extends('back_end.layouts.app')

@section('PageHead', 'Permission Index')

@section('PageTitle', 'Permission Index')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/users-management/permissions">Permissions</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
    <x-links.header-links-dataTable />
@endsection

@section('actionTitle', 'Permissions Index')
@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="clearfix">
                                {{-- <a class="btn btn-default float-right ml-1" href="path/to/settings" aria-label="Settings">
                                    <i class="fa fa-cog" aria-hidden="true"></i> Settings
                                </a> --}}
                                <a class="btn btn-default float-right ml-1" aria-label="Settings">
                                    <i class="fa fa-cog" aria-hidden="true"></i> Settings
                                </a>
                                <a class="btn btn-secondary float-right ml-1">
                                    <i type="button" onClick="Refresh()" class="fa fa-refresh" aria-hidden="true"></i>
                                    Refresh
                                </a>
                                <a class="btn btn-primary float-right ml-1">
                                    <i type="button" class="fa fa-add" aria-hidden="true"></i>
                                    Add
                                </a>
                                <a class="btn btn-default float-right ml-1">
                                    <i type="button" class="fa fa-save" aria-hidden="true"></i>
                                    Save
                                </a>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Log Name</th>
                                        <th>Description</th>
                                        <th>Event</th>
                                        <th>Properties</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- ---- --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Log Name</th>
                                        <th>Description</th>
                                        <th>Event</th>
                                        <th>Properties</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>View</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
@section('actionFooter', 'Footer')
@section('footerLinks')


    <x-message.message />

    <x-links.footer-links-dataTable />
    <x-links.script-yajara-dataTable>
        "fnDrawCallback": function(oSettings) {
        $('.delete-permission').on('click', function() {
        var permissionID = $(this).data('permission_id');
        var isReady = confirm("Are you sure" + permissionID);
        var myHeaders = new Headers({
        "X-CSRF-TOKEN": $("input[name='_token']").val()
        });
        if (isReady) {
        fetch("/admin/users-management/permissions/" + permissionID, {
        method: 'DELETE',
        headers: myHeaders,
        }).then(function(response) {
        return response.json();
        });
        $('#example1').DataTable().ajax.reload();
        }

        });
        },
        ajax: '{!! route('activityLogs.get') !!}',

        columns: [{
        data: 'id',
        name: 'id',
        defaultContent: ''
        },
        {
        data: 'log_name',
        name: 'log_name',
        defaultContent: ''
        },
        {
        data: 'description',
        name: 'description',
        defaultContent: '',
        },
        {
        data: 'event',
        name: 'event',
        defaultContent: ''
        },
        {
        data: 'properties',
        name: 'properties',
        defaultContent: ''
        },
        {
        data: 'created_at',
        name: 'created_at',
        defaultContent: ''
        },
        {
        data: 'updated_at',
        name: 'updated_at',
        defaultContent: ''
        },
        {
        data: 'editLink',
        name: 'editLink',
        defaultContent: ''
        },
        ]
    </x-links.script-yajara-dataTable>
    <script>
        function Refresh() {
            $('#example1').DataTable().ajax.reload();
            toastr.info('User Table Reloaded');
        }
    </script>


@endsection