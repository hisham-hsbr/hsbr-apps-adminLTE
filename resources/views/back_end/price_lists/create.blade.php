@extends('back_end.layouts.app')

@section('PageHead', 'Price Lists Create')

@section('PageTitle', 'Price Lists Create')
@section('pageNavHeader')
<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
<li class="breadcrumb-item"><a href="/admin/price-lists">Price Lists</a></li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('headLinks')
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet"
    href="{{ asset('back_end_links/adminLinks/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
@endsection

@section('actionTitle', 'Role Create')
@section('mainContent')

<form role="form" action="{{ route('priceLists.store') }}" method="post" enctype="multipart/form-data" id="quickForm">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <x-form.form-group-label-input label_for="code" label_name="Code" input_type="text" input_name="code"
                    input_class="" input_style="text-transform: uppercase" input_id="code"
                    input_value="{{ old('code') }}" input_placeholder="Enter Code" />
            </div>
            <div class="col-4">
                <x-form.form-group-label-input label_for="name" label_name="Name" input_type="text" input_name="name"
                    input_class="" input_style="text-transform: uppercase" input_id="name"
                    input_value="{{ old('name') }}" input_placeholder="Enter Name" />
            </div>
            <div class="col-4">
            </div>
            <div class="col-4">
                <x-form.form-group-label-input label_for="group" label_name="Group" input_type="text" input_name="group"
                    input_class="" input_style="text-transform: uppercase" input_id="group"
                    input_value="{{ old('group') }}" input_placeholder="Enter Group" />
            </div>
            <div class="col-4">
                <x-form.form-group-label-input label_for="packing" label_name="Packing" input_type="text"
                    input_name="packing" input_class="" input_style="text-transform: uppercase" input_id="packing"
                    input_value="{{ old('packing') }}" input_placeholder="Enter Packing" />
            </div>
            <div class="col-4">
                <x-form.form-group-label-input label_for="uom" label_name="Uom" input_type="text" input_name="uom"
                    input_class="" input_style="text-transform: uppercase" input_id="uom" input_value="{{ old('uom') }}"
                    input_placeholder="Enter uom" />
            </div>
            <div class="col-2">
                <x-form.form-group-label-input label_for="box_price" label_name="Box Price" input_type="number"
                    input_name="box_price" input_class="" input_style="text-transform: uppercase" input_id="box_price"
                    input_value="{{ old('box_price') }}" input_placeholder="0.00" />
            </div>
            <div class="col-2">
                <x-form.form-group-label-input label_for="half_box_price" label_name="Half Box Price"
                    input_type="number" input_name="half_box_price" input_class=""
                    input_style="text-transform: uppercase" input_id="half_box_price"
                    input_value="{{ old('half_box_price') }}" input_placeholder="0.00" />
            </div>
            <div class="col-2">
                <x-form.form-group-label-input label_for="wholesale_price" label_name="Wholesale Price"
                    input_type="number" input_name="wholesale_price" input_class=""
                    input_style="text-transform: uppercase" input_id="wholesale_price"
                    input_value="{{ old('wholesale_price') }}" input_placeholder="0.00" />
            </div>
            <div class="col-2">
                <x-form.form-group-label-input label_for="cash_price" label_name="Cash Price" input_type="number"
                    input_name="cash_price" input_class="" input_style="text-transform: uppercase" input_id="cash_price"
                    input_value="{{ old('cash_price') }}" input_placeholder="0.00" />
            </div>
            <div class="col-2">
                <x-form.form-group-label-input label_for="credit_price" label_name="Credit Price" input_type="number"
                    input_name="credit_price" input_class="" input_style="text-transform: uppercase"
                    input_id="credit_price" input_value="{{ old('credit_price') }}" input_placeholder="0.00" />
            </div>
            <div class="col-4">
                <x-form.form-group-label-input label_for="description" label_name="Description" input_type="text"
                    input_name="description" input_class="" input_style="text-transform: uppercase"
                    input_id="description" input_value="{{ old('description') }}"
                    input_placeholder="Enter Description" />
            </div>
        </div>


        <div class="col-2">
            <x-form.form-group-checkbox-label input_type="checkbox" input_name="status" input_class="" input_style=""
                input_id="status" input_value="1" input_add="" label_for="status" label_name="Active" />
        </div>
    </div>
    {{-- <button type="submit" class="btn btn-primary float-right ml-1">Save</button> --}}

    <x-form.button-href button_type="" button_class="btn btn-warning" href="{{ route('priceLists.index') }}"
        button_icon="fa fa-arrow-left" button_name=" Back" />
    <x-form.button button_type="submit" button_class="btn btn-primary" button_icon="fa fa-floppy-o"
        button_name=" Save" />
</form>
@endsection
@section('actionFooter')



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
                name: {
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
                terms: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: "Please enter a name",
                },
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
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

{{-- <script src="jquery.min.js"></script>
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
</script> --}}




@endsection