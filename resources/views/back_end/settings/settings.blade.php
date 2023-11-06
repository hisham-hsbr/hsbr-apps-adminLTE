@extends('back_end.layouts.app')

@section('PageHead', 'User Settings')

@section('PageTitle', 'User Settings')
@section('pageNavHeader')
    <li class="breadcrumb-item active"><a href="/admin/dashboard">Dashboard</a></li>
    {{-- <li class="breadcrumb-item"><a href="/admin/roles">Roles</a></li>
    <li class="breadcrumb-item active">Create</li> --}}
@endsection

@section('headLinks')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
@endsection

@section('actionTitle', 'User Settings')
@section('mainContent')
    <div class="container-fluid">
        @can('User Menu')
            <div class="row">

                <div class="col-md-12">
                    <form role="form" action="{{ route('user-settings.update') }}" method="post" id="quickForm"
                        enctype="multipart/form-data" id="quickForm">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="card-body">
                            {{-- App settings --}}
                            <div class="row">
                                <div class="col-sm-3 pl-5 pt-2">
                                    <input type="checkbox" class="form-check-input" name="card_header" value="1"
                                        id="card_header" @if ($default_layout->data['card_header'] == 1) {{ 'checked' }} @endif />
                                    <label class="form-check-label" for="card_header">Page Card Header</label>
                                </div>
                                <div class="col-sm-3 pl-5 pt-2">
                                    <input type="checkbox" class="form-check-input" name="card_footer" value="1"
                                        id="card_footer" @if ($default_layout->data['card_footer'] == 1) {{ 'checked' }} @endif />
                                    <label class="form-check-label" for="card_footer">Page Card Footer</label>
                                </div>
                                <div class="col-sm-3 pl-5 pt-2">
                                    <input type="checkbox" class="form-check-input" name="sidebar_collapse" value="1"
                                        id="sidebar_collapse" @if ($default_layout->data['sidebar_collapse'] == 1) {{ 'checked' }} @endif />
                                    <label class="form-check-label" for="sidebar_collapse">Sidebar Collapse</label>
                                </div>
                                <div class="col-sm-3 pl-5 pt-2">
                                    <input type="checkbox" class="form-check-input" name="dark_mode" value="1"
                                        id="dark_mode" @if ($default_layout->data['dark_mode'] == 1) {{ 'checked' }} @endif />
                                    <label class="form-check-label" for="dark_mode">Dark Mode</label>
                                </div>

                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="">
                            {{-- @can('Create User') --}}
                            <button type="submit" class="btn btn-primary float-right ml-1">Update</button>
                            {{-- @endcan --}}
                            <a type="button" href="{{ route('back-end.dashboard') }}"
                                class="btn btn-warning float-right ml-1">Back</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>

                </div>
                <!--/.col (left) -->

            </div>
        @endcan
        <!-- /.row -->
    </div><!-- /.container-fluid -->






@endsection
@section('actionFooter', 'Footer')
@section('footerLinks')

    <x-message.message />

    <x-links.footer-link-jquery-validation />

    <script>
        $(function() {
            // $.validator.setDefaults({
            //     submitHandler: function() {
            //         alert("Form successful submitted!");
            //     }
            // });
            $('#quickForm').validate({
                rules: {
                    app_name: {
                        required: true,
                    },
                    app_version: {
                        required: true,
                    },
                    page_title_prefix: {
                        required: true,
                    },
                    page_title_suffix: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                    website: {
                        required: true,
                        url: true,
                    },
                    mail: {
                        required: true,
                        email: true,
                    },
                    starting_year: {
                        required: true,
                        number: true,
                    },
                    ending_year: {
                        required: true,
                        number: true,
                    },
                },
                messages: {
                    app_name: {
                        required: "Please enter App Name",
                    },
                    app_version: {
                        required: "Please enter App Version",
                    },
                    page_title_prefix: {
                        required: "Please enter Page Title Prefix",
                    },
                    page_title_suffix: {
                        required: "Please enter Page Title Suffix",
                    },
                    name: {
                        required: "Please enter Name",
                    },
                    mail: {
                        required: "Please enter Email Address",
                        email: "Please enter a valid Email Address"
                    },
                    starting_year: {
                        required: "Please enter Starting Year",
                        number: "Please enter a valid Year"
                    },
                    ending_year: {
                        required: "Please enter Ending Year",
                        email: "Please enter a valid Year"
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>

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
