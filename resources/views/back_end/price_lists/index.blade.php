@extends('back_end.layouts.app')

@section('PageHead', 'Price Lists Index')

@section('PageTitle', 'Price Lists Index')
@section('pageNavHeader')
<li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
<li class="breadcrumb-item"><a href="/admin/price-lists">Price Lists</a></li>
<li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
<x-links.header-links-dataTable />
@endsection

@section('actionTitle', 'Price Lists Index')
@section('mainContent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <x-layouts.div-clearfix>
                            <x-form.button-href button_type="" button_class="btn btn-primary"
                                href="{{ route('priceLists.create') }}" button_icon="fa fa-add" button_name=" Add" />
                        </x-layouts.div-clearfix>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Packing</th>
                                    <th>UOM</th>
                                    <th>Box Price</th>
                                    <th>Half Box Price</th>
                                    <th>Wholesale Price</th>
                                    <th>Cash Price</th>
                                    <th>Credit Price</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- ---- --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sn</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Packing</th>
                                    <th>UOM</th>
                                    <th>Box Price</th>
                                    <th>Half Box Price</th>
                                    <th>Wholesale Price</th>
                                    <th>Cash Price</th>
                                    <th>Credit Price</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
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
    "fnDrawCallback": function(oSettings) {
    $('.delete-priceLists').on('click', function() {
    var priceListsID = $(this).data('priceLists_id');
    var isReady = confirm("Are you sure" + priceListsID);
    var myHeaders = new Headers({
    "X-CSRF-TOKEN": $("input[name='_token']").val()
    });
    if (isReady) {
    fetch("/admin/users-management/price-lists/" + priceListsID, {
    method: 'DELETE',
    headers: myHeaders,
    }).then(function(response) {
    return response.json();
    });
    $('#example1').DataTable().ajax.reload();
    }

    });
    },
    ajax: '{!! route('get.priceLists') !!}',

    columns: [{
    data: 'id',
    name: 'id',
    defaultContent: ''
    },
    {
    data: 'code',
    name: 'code',
    defaultContent: ''
    },
    {
    data: 'name',
    name: 'name',
    defaultContent: ''
    },
    {
    data: 'group',
    name: 'group',
    defaultContent: '',
    },
    {
    data: 'packing',
    name: 'packing',
    defaultContent: '',
    },
    {
    data: 'uom',
    name: 'uom',
    defaultContent: '',
    },
    {
    data: 'box_price',
    name: 'box_price',
    defaultContent: '',
    },
    {
    data: 'half_box_price',
    name: 'half_box_price',
    defaultContent: '',
    },
    {
    data: 'wholesale_price',
    name: 'wholesale_price',
    defaultContent: '',
    },
    {
    data: 'cash_price',
    name: 'cash_price',
    defaultContent: '',
    },
    {
    data: 'credit_price',
    name: 'credit_price',
    defaultContent: '',
    },
    {
    data: 'description',
    name: 'description',
    defaultContent: '',
    },
    {
    data: 'status',
    name: 'status',
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
<script>
    function Refresh() {
            $('#example1').DataTable().ajax.reload();
            toastr.info('User Table Reloaded');
        }
</script>


@endsection