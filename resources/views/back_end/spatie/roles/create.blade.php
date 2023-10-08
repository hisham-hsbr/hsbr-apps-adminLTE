@extends('back_end.layouts.app')

@section('PageHead', 'Dashboard')

@section('PageTitle', 'Dashboard')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/blood">Dashboard</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')

@endsection

@section('actionTitle', 'Dashboard Index')
@section('mainContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">

            </div>
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="card">

                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card card-info">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Role Create</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('roles.store') }}" method="post"
                            enctype="multipart/form-data" id="quickForm">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" id="name" placeholder="Enter Role Name">
                                    </div>
                                </div>
                                <label for="role" class="pr-4">Assign Permissions</label>
                                <label><input class="form-check-input p-5" id="checkall" type="checkbox">
                                    Select All
                                </label>
                                <div class="container">
                                    <div class="row">
                                        @foreach ($permissions as $key => $value)
                                            <div class="col-md-4">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h3 class="card-title">{{ $key }}</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <div class="form-group clearfix">
                                                            <div class="icheck-primary d-inline">
                                                                @foreach ($value as $permission)
                                                                    <input type="checkbox" name="permission[]"
                                                                        class="checkitem" id="checkboxPrimary1"
                                                                        value="{{ $permission->id }}"
                                                                        id="{{ $permission->id }}">
                                                                    <label for="{{ $permission->id }}"
                                                                        class="form-check-label">{{ $permission->name }}</label>
                                                                    <br>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-sm-10 pl-5 pt-2">
                                    <input type="checkbox" class="form-check-input" name="status" value="1"
                                        id="status" />
                                    <label class="form-check-label" for="status">Active</label>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                @can('Create User')
                                    <button type="submit" class="btn btn-primary float-right ml-1">Save</button>
                                @endcan
                                <a type="button" href="{{ route('roles.index') }}"
                                    class="btn btn-warning float-right ml-1">Back</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
                <!-- /.card -->

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
@endsection
