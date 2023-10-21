@extends('back_end.layouts.app')

@section('PageHead', 'User Create')

@section('PageTitle', 'User Create')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/admin/users">Users</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('headLinks')
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
@endsection

@section('actionTitle', 'User Create')
@section('mainContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">

            </div>
            <!-- left column -->
            <div class="col-md-10">
                <form role="form" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"
                    id="quickForm">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <!-- /.card-header -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="name" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Assign Roles</label>
                                    <select name="roles[]" class="duallistbox" multiple="multiple">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Loging Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="inputEmail3" class="required col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                        placeholder="Email">
                                </div>


                                <div class="col-sm-4">
                                    <label for="inputPassword3" class="required col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="col-sm-4">
                                    <label for="inputPassword3" class="required col-form-label">Confirm
                                        Password</label>
                                    <input type="password" name="confirm-password" class="form-control"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- /.card-header -->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Assign Special Permissions</label>
                                    <select name="permission[]" class="duallistbox" multiple="multiple">
                                        @foreach ($permissions as $key => $value)
                                            @foreach ($value as $permission)
                                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="col-sm-10 pl-5 pt-2">
                            <input type="checkbox" class="form-check-input" name="status" value="1" id="status" />
                            <label class="form-check-label" for="status">Active</label>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="">
                        {{-- @can('User Menu') --}}
                        <button type="submit" class="btn btn-primary float-right ml-1">Save</button>
                        {{-- @endcan --}}
                        <a type="button" href="{{ route('roles.index') }}"
                            class="btn btn-warning float-right ml-1">Back</a>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->


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
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
        $("#checkall").change(function() {
            $(".checkitem").prop("checked", $(this).prop("checked"))
        })
        $(".checkitem").change(function() {
            if ($(this).prop("checked") == false) {
                $("#checkall").prop("checked", false)
            }
            if ($(".checkitem:checked").length == $(".checkitem").length) {
                $("#checkall").prop("checked", true)
            }
        })
    </script>
    <script>
        var checkid = '{{ $key }}';
        var checkclass = '{{ $key }}';

        $('#checkall' + checkid).change(function() {
            $('.check' + checkclass).prop("checked",
                $(this).prop("checked"))
        })
        $('.check' + checkclass).change(function() {
            if ($(this).prop("checked") == false) {
                $("#checkall' + checkid").prop("checked", false)
            }
            if ($('.check' + checkclasschecked).length == $('.check' +
                    checkclass).length) {
                $("#checkall' + checkid").prop("checked", true)
            }
        })
    </script>
    <!-- Bootstrap4 Duallistbox -->
    <script
        src="{{ asset('back_end_links/adminLinks/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}">
    </script>
    <script>
        $(function() {
            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
        })
    </script>




@endsection
