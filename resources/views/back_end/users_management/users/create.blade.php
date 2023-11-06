@extends('back_end.layouts.app')

@section('PageHead', 'User Create')

@section('PageTitle', 'User Create')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="{{ route('back-end.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('headLinks')
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('actionTitle', 'User Create')
@section('mainContent')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1">

            </div>
            <!-- left column -->
            <div class="col-md-10">
                @can('User Create')
                    <form role="form" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"
                        id="quickForm">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <!-- /.card-header -->
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="name" class="required col-form-label">First
                                        Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}" placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="last_name" class="required col-form-label">Last
                                        Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        value="{{ old('last_name') }}" placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="dob" class="required col-form-label">Date of
                                        Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control"
                                        value="{{ old('dob') }}" placeholder="Enter birth date">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="phone1" class="required col-form-label">Phone
                                        Number 1</label>
                                    <input type="number" name="phone1" id="phone1" class="form-control"
                                        value="{{ old('phone1') }}" placeholder="Phone Number 1">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="phone2" class="col-form-label">Phone
                                        Number 2</label>
                                    <input type="number" name="phone2" class="form-control" value="{{ old('phone2') }}"
                                        placeholder="Phone Number 2">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="blood_id" class="required col-form-label">Blood
                                        Group</label>
                                    <select name="blood_id" id="blood_id" class="form-control select2">
                                        <option disabled selected>--Blood Group--</option>
                                        @foreach ($bloods as $blood)
                                            <option {{ old('blood_id') == $blood->id ? 'selected' : '' }}
                                                value="{{ $blood->id }}">
                                                {{ $blood->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="gender" class="required col-form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-control select2">
                                        <option disabled selected>--Gender--</option>

                                        <option @if (old('gender') == 'male') { selected } @endif value="male">Male
                                        </option>
                                        <option @if (old('gender') == 'female') { selected } @endif value="female">Female
                                        </option>
                                        <option @if (old('gender') == 'other') { selected } @endif value="other">Other
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <label for="time_zone_id" class="required col-form-label">Time Zone</label>
                                    <select name="time_zone_id" id="time_zone_id" class="form-control select2">
                                        <option disabled selected>--Time Zone--</option>
                                        @foreach ($time_zones as $time_zone)
                                            <option {{ Auth::user()->time_zone_id == $time_zone->id ? 'selected' : '' }}
                                                value="{{ $time_zone->id }}">{{ $time_zone->time_zone }} -- (
                                                {{ $time_zone->utc_code }}{{ ' ' }}{{ $time_zone->country }})
                                                {{-- <option {{  old('time_zone_id') == $time_zone->id ? 'selected' : ''}}
                                    value="{{ $time_zone->id }}">{{ $time_zone->time_zone }} -- (
                                    {{ $time_zone->utc_code }}{{ ' ' }}{{ $time_zone->country }}) --}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Loging Details</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="email" class="required col-form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                value="{{ old('email') }}" placeholder="Email">
                                        </div>


                                        <div class="form-group col-sm-4">
                                            <label for="password" class="required col-form-label">Password</label>
                                            <x-form.button button_type="button" button_oneclick="generate()"
                                                button_class="btn btn-warning btn-xs generate-password"
                                                button_icon="fa fa-plus" button_name="Generate" />
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password">
                                            <div class="form-group-append">
                                                <button type="button" class="btn btn-outline-secondary show-password"><i
                                                        class="fa-regular fa-eye-slash"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="password_confirm" class="required col-form-label">Confirm
                                                Password</label>
                                            <input type="password" name="password_confirm" id="password_confirm"
                                                class="form-control " placeholder="Confirm Password">
                                            <div class="form-group-append">
                                                <button type="button" class="btn btn-outline-secondary show-password"><i
                                                        class="fa-regular fa-eye-slash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Address Details</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="form-group col-sm-4">
                                            <label for="country" class="required col-form-label">Select
                                                Country</label>
                                            <select name="country" id="country" class="form-control select2 dynamic"
                                                data-dependent="state">
                                                <option value="">Select Country</option>
                                                @foreach ($country_list as $country)
                                                    <option value="{{ $country->country }}">
                                                        {{ $country->country }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="state" class="required col-form-label">Select
                                                State</label>
                                            <select name="state" id="state" class="form-control select2 dynamic"
                                                data-dependent="district">
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="district" class="required col-form-label">Select
                                                District</label>
                                            <select name="district" id="district" class="form-control select2 dynamic"
                                                data-dependent="city">
                                                <option value="">Select District</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="city" class="required col-form-label">Select
                                                City</label>
                                            <select name="city" id="city" class="form-control select2 dynamic"
                                                data-dependent="zip_code">
                                                <option value="">Select City</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="zip_code" class="required col-form-label">Select Zip
                                                Code</label>
                                            <select name="zip_code" id="zip_code" class="form-control select2">
                                                <option value="">Select Zip Code</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="roles">Assign Roles</label>
                                        <select name="roles[]" id="roles" class="duallistbox" multiple="multiple">
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
                                <input type="checkbox" class="form-check-input" name="status" value="1"
                                    id="status" />
                                <label class="form-check-label" for="status">Active</label>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="">
                            @can('User Create')
                                <button type="submit" class="btn btn-primary float-right ml-1">Save</button>
                            @endcan
                            <a type="button" href="{{ route('users.index') }}"
                                class="btn btn-warning float-right ml-1">Back</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                @endcan

            </div>
            <!--/.col (left) -->

        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->


@endsection
@section('actionFooter', 'Footer')
@section('footerLinks')

    <!-- Select2 -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {

            //Initialize Select2 Elements
            $('.select2').select2()

            // //Initialize Select2 Elements
            // $('.select2bs4').select2({
            //     theme: 'bootstrap4'
            // })
        });
    </script>

    <x-script.password-generate />

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
                    name: {
                        required: true,
                    },
                    dob: {
                        required: true,
                        date: true,
                    },
                    phone1: {
                        required: true,
                        number: true,
                        minlength: 10
                    },
                    blood_id: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    },
                    time_zone_id: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    country: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                    district: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    zip_code: {
                        required: true,
                    },
                    roles: {
                        required: true,
                    },
                    // password_confirm: {
                    //     minlength: 5
                    //     equalTo: "#password"
                    // },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Please Enter First Name",
                    },
                    dob: {
                        required: "Please Enter Date Of Birth",
                    },
                    phone1: {
                        required: "Please Enter Phone Number",
                        minlength: "Your Must Be At Least 10 Number Long"
                    },
                    blood_id: {
                        required: "Please Select Blood Group",
                    },
                    gender: {
                        required: "Please Select Gender",
                    },
                    time_zone_id: {
                        required: "Please Select Time Zone",
                    },
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a valid email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    country: {
                        required: "Please Select country",
                    },
                    state: {
                        required: "Please Select state",
                    },
                    district: {
                        required: "Please Select district",
                    },
                    city: {
                        required: "Please Select city",
                    },
                    zip_code: {
                        required: "Please Select Zip Code",
                    },
                    roles: {
                        required: "Please Select Role",
                    },
                    terms: "Please accept our terms"
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
    <script type="text/javascript">
        $(document).ready(function() {

            $('.dynamic').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('users.csdcs.get') }}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function(result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#country').change(function() {
                $('#state').val('');
                $('#district').val('');
                $('#city').val('');
                $('#zip_code').val('');
            });

            $('#state').change(function() {
                $('#district').val('');
                $('#city').val('');
                $('#zip_code').val('');
            });

            $('#district').change(function() {
                $('#city').val('');
                $('#zip_code').val('');
            });

            $('#district').change(function() {
                $('#zip_code').val('');
            });


        });
    </script>




@endsection
