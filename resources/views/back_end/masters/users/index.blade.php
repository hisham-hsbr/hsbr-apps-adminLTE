@extends('back_end.layouts.app')

@section('PageHead', 'User')

@section('PageTitle', 'User')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/masters/users">User</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
    <x-links.header-links-dataTable />
@endsection

@section('actionTitle', 'User Index')
@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <x-layouts.div-clearfix>
                                <x-form.a-button button_class="btn btn-primary" href="{{ route('users.create') }}"
                                    button_icon="fa fa-add" button_name="Add me" />
                            </x-layouts.div-clearfix>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>DOB</th>
                                        <th>Phone1</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Email Verified</th>
                                        <th>Status</th>
                                        <th>City</th>
                                        <th>Blood</th>
                                        <th>Time Zone</th>
                                        <th>Roles</th>
                                        <th>Special Permissions</th>
                                        <th>Created By</th>
                                        <th>Updated By</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sn</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>DOB</th>
                                        <th>Phone1</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Email Verified</th>
                                        <th>Status</th>
                                        <th>City</th>
                                        <th>Blood</th>
                                        <th>Time Zone</th>
                                        <th>Roles</th>
                                        <th>Special Permissions</th>
                                        <th>Created By</th>
                                        <th>Updated By</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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
        ajax: '{!! route('get.users') !!}',

        columns: [{
        data: 'id',
        name: 'id',
        defaultContent: ''
        },
        {
        data: 'name',
        name: 'name',
        defaultContent: ''
        },
        {
        data: 'last_name',
        name: 'last_name',
        defaultContent: ''
        },
        {
        data: 'dob',
        name: 'dob',
        defaultContent: '',
        },
        {
        data: 'phone1',
        name: 'phone1',
        defaultContent: '',
        },
        {
        data: 'gender',
        name: 'gender',
        defaultContent: '',
        },
        {
        data: 'email',
        name: 'email',
        defaultContent: ''
        },
        {
        data: 'emailVerified',
        name: 'emailVerified',
        defaultContent: '',
        {{-- orderable: false, --}}
        searchable: false
        },
        {
        data: 'status',
        name: 'status',
        defaultContent: ''
        },
        {
        data: 'cityName',
        name: 'cityName',
        defaultContent: ''
        },
        {
        data: 'blood',
        name: 'blood',
        defaultContent: ''
        },
        {
        data: 'timeZone',
        name: 'timeZone',
        defaultContent: ''
        },
        {
        data: 'roles',
        name: 'roles',
        defaultContent: ''
        },
        {
        data: 'permissions',
        name: 'permissions',
        defaultContent: ''
        },
        {
        data: 'created_by',
        name: 'created_by',
        defaultContent: ''
        },
        {
        data: 'updated_by',
        name: 'updated_by',
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
        {
        data: 'deleteLink',
        name: 'deleteLink',
        defaultContent: ''
        },
        ]
    </x-links.script-yajara-dataTable>





@endsection
