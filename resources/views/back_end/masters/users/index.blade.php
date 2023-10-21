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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sn</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created</th>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created</th>
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
        data: 'email',
        name: 'email',
        defaultContent: '',
        orderable: false,
        searchable: false
        },
        {
        data: 'created_at',
        name: 'created_at',
        defaultContent: ''
        },
        {
        data: 'name',
        name: 'name',
        defaultContent: ''
        },
        {
        data: 'email',
        name: 'email',
        defaultContent: '',
        orderable: false,
        searchable: false
        },
        {
        data: 'created_at',
        name: 'created_at',
        defaultContent: ''
        },
        ]
    </x-links.script-yajara-dataTable>



@endsection
