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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('back_end_links/adminLinks/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('actionTitle', 'User Create')
@section('mainContent')
<div class="container-fluid">
    @can('User Menu')
    <div class="row">
        <div class="col-md-1">

        </div>
        <!-- left column -->
        <div class="col-md-10">
            <form role="form" action="{{ route('users.update', $user->id) }}" method="post"
                enctype="multipart/form-data" id="quickForm">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="card-body">
                    <!-- /.card-header -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Personal Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="name" class="required col-form-label">First
                                        Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                        placeholder="First Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="required col-form-label">Last
                                        Name</label>
                                    <input type="text" name="last_name" class="form-control"
                                        value="{{ $user->last_name }}" placeholder="Last Name">
                                </div>
                                <div class="col-sm-4">
                                    <label for="dob" class="required col-form-label">Date of
                                        Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ $user->dob }}"
                                        placeholder="Enter birth date">
                                </div>

                                <div class="col-sm-4">
                                    <label for="phone1" class="required col-form-label">Phone
                                        Number 1</label>
                                    <input type="number" name="phone1" class="form-control" value="{{ $user->phone1 }}"
                                        placeholder="Phone Number 1">
                                </div>

                                <div class="col-sm-4">
                                    <label for="phone2" class="col-form-label">Phone
                                        Number 2</label>
                                    <input type="number" name="phone2" class="form-control" value="{{ $user->phone2 }}"
                                        placeholder="Phone Number 2">
                                </div>
                                <div class="col-sm-4">
                                    <label for="blood" class="required col-form-label">Blood
                                        Group</label>
                                    <select name="blood_id" class="form-control select2">
                                        <option disabled selected>--Blood Group--</option>
                                        @foreach ($bloods as $blood)
                                        <option {{  $user->blood->id == $blood->id ? 'selected' : ''}}
                                            value="{{ $blood->id }}">{{ $blood->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="gender" class="required col-form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-control select2">
                                        <option disabled {{  $user->gender == "" ? 'selected' : ''}}>--Gender--
                                        </option>

                                        <option @if ($user->gender == 'male') { selected } @endif value="male">Male
                                        </option>
                                        <option @if ($user->gender == 'female') { selected } @endif
                                            value="female">Female</option>
                                        <option @if ($user->gender == 'other') { selected } @endif value="other">Other
                                        </option>

                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <label for="time_zone" class="required col-form-label">Time Zone</label>
                                    <select name="time_zone_id" class="form-control select2">
                                        <option disabled selected>--Time Zone--</option>
                                        @foreach ($time_zones as $time_zone)
                                        <option {{  $user->timeZone->id  == $time_zone->id ? 'selected' : ''}}
                                            value="{{ $time_zone->id }}">{{ $time_zone->time_zone }} -- (
                                            {{ $time_zone->utc_code }}{{ ' ' }}{{ $time_zone->country }})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="email_verified_at" class="required col-form-label">Email
                                        verified</label>
                                    <input type="date" name="email_verified_at" class="form-control"
                                        value="{{ $user->email_verified_at }}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="email" class="required col-form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                        placeholder="Enter email">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Address Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="country" class="required col-form-label">Select
                                        Country</label>
                                    <select name="country" id="country" class="form-control select2 dynamic"
                                        data-dependent="state">
                                        {{-- <option value="">Select Country</option> --}}
                                        @foreach ($country_list as $country)
                                        <option {{  $user->cityName->id == $country->id ? 'selected' : ''}}
                                            value="{{ $country->country }}">{{ $country->country }}
                                        </option>
                                        <option value="{{ $country->country }}">
                                            {{ $country->country }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="state" class="required col-form-label">Select
                                        State</label>
                                    <select name="state" id="state" class="form-control select2 dynamic"
                                        data-dependent="district">
                                        {{-- <option value="">Select State</option> --}}
                                        <option {{  $user->cityName->id == $country->id ? 'selected' : ''}}
                                            value="{{ $country->state }}">{{ $country->state }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="district" class="required col-form-label">Select
                                        District</label>
                                    <select name="district" id="district" class="form-control select2 dynamic"
                                        data-dependent="city">
                                        {{-- <option value="">Select District</option> --}}
                                        <option {{  $user->cityName->id == $country->id ? 'selected' : ''}}
                                            value="{{ $country->district }}">{{ $country->district }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="city" class="required col-form-label">Select
                                        City</label>
                                    <select name="city" id="city" class="form-control select2 dynamic"
                                        data-dependent="zip_code">
                                        {{-- <option value="">Select City</option> --}}
                                        <option {{  $user->cityName->id == $country->id ? 'selected' : ''}}
                                            value="{{ $country->city }}">{{ $country->city }}
                                        </option>
                                    </select>
                                </div>
                                {{ $country->id }}
                                <div class="col-sm-4">
                                    <label for="zip_code" class="required col-form-label">Select Zip
                                        Code</label>
                                    <select name="zip_code" id="zip_code" class="form-control select2">
                                        {{-- <option  selected>--Blood Group--</option> --}}
                                        <option {{  $user->cityName->id == $country->id ? 'selected' : ''}}
                                            value="{{ $country->zip_code }}">{{ $country->zip_code }}
                                        </option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Assign Roles</label>
                                <select name="roles[]" class="duallistbox" multiple="multiple">
                                    @foreach ($roles as $role)
                                    <option @if (in_array($role->id,
                                        $user->roles->pluck('id')->toArray())) selected @endif
                                        value="{{ $role->id }}">{{ $role->name }}</option>
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
                                    <option @if(in_array($permission->
                                        id,$user->permissions->pluck('id')->toArray()))selected
                                        @endif value="{{ $permission->id }}">{{ $permission->name }}</option>
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
                        <input type="checkbox" class="form-check-input" name="status" value="1" id="status"
                            @if($user->status == 1) {{ 'checked' }} @endif />
                        <label class="form-check-label" for="status">Active</label>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="">
                    {{-- @can('User Menu') --}}
                    <button type="submit" class="btn btn-primary float-right ml-1">Update</button>
                    {{-- @endcan --}}
                    <a type="button" href="{{ route('roles.index') }}" class="btn btn-warning float-right ml-1">Back</a>
                </div>
                <!-- /.card-footer -->
            </form>

        </div>
        <!--/.col (left) -->

    </div>
    <!-- /.row -->
    @endcan
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
<script type="text/javascript">
    $(document).ready(function() {

                $('.dynamic').change(function() {
                    if ($(this).val() != '') {
                        var select = $(this).attr("id");
                        var value = $(this).val();
                        var dependent = $(this).data('dependent');
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: "{{ route('get.csdcs') }}",
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