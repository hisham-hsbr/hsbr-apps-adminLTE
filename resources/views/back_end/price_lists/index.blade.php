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
                                @can('Price List Create')
                                    <x-form.button-href button_type="" button_class="btn btn-primary"
                                        href="{{ route('priceLists.create') }}" button_icon="fa fa-add" button_name=" Add" />
                                @endcan
                            </x-layouts.div-clearfix>
                            @can('Price List Read')
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            @can('Price List Read')
                                                <th>Sn</th>
                                            @endcan
                                            @can('Price List Read Code')
                                                <th>Code</th>
                                            @endcan
                                            @can('Price List Read Name')
                                                <th>Name</th>
                                            @endcan
                                            @can('Price List Read Group')
                                                <th>Group</th>
                                            @endcan
                                            @can('Price List Read Packing')
                                                <th>Packing</th>
                                            @endcan
                                            @can('Price List Read UOM')
                                                <th>UOM</th>
                                            @endcan
                                            @can('Price List Read Box Price')
                                                <th>Box Price</th>
                                            @endcan
                                            @can('Price List Read Half Box Price')
                                                <th>Half Box Price</th>
                                            @endcan
                                            @can('Price List Read Wholesale Price')
                                                <th>Wholesale Price</th>
                                            @endcan
                                            @can('Price List Read Cash Price')
                                                <th>Cash Price</th>
                                            @endcan
                                            @can('Price List Read Credit Price')
                                                <th>Credit Price</th>
                                            @endcan
                                            @can('Price List Read Description')
                                                <th>Description</th>
                                            @endcan
                                            @can('Price List Read Status')
                                                <th>Status</th>
                                            @endcan
                                            @can('Price List Read Created At')
                                                <th>Created At</th>
                                            @endcan
                                            @can('Price List Read Updated At')
                                                <th>Updated At</th>
                                            @endcan
                                            @can('Price List Read Created By')
                                                <th>Created By</th>
                                            @endcan
                                            @can('Price List Read Updated By')
                                                <th>Updated By</th>
                                            @endcan
                                            @can('Price List Edit')
                                                <th>Edit</th>
                                            @endcan
                                            @can('Price List Delete')
                                                <th>Delete</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- ---- --}}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            @can('Price List Read')
                                                <th>Sn</th>
                                            @endcan
                                            @can('Price List Read Code')
                                                <th>Code</th>
                                            @endcan
                                            @can('Price List Read Name')
                                                <th>Name</th>
                                            @endcan
                                            @can('Price List Read Group')
                                                <th>Group</th>
                                            @endcan
                                            @can('Price List Read Packing')
                                                <th>Packing</th>
                                            @endcan
                                            @can('Price List Read UOM')
                                                <th>UOM</th>
                                            @endcan
                                            @can('Price List Read Box Price')
                                                <th>Box Price</th>
                                            @endcan
                                            @can('Price List Read Half Box Price')
                                                <th>Half Box Price</th>
                                            @endcan
                                            @can('Price List Read Wholesale Price')
                                                <th>Wholesale Price</th>
                                            @endcan
                                            @can('Price List Read Cash Price')
                                                <th>Cash Price</th>
                                            @endcan
                                            @can('Price List Read Credit Price')
                                                <th>Credit Price</th>
                                            @endcan
                                            @can('Price List Read Description')
                                                <th>Description</th>
                                            @endcan
                                            @can('Price List Read Status')
                                                <th>Status</th>
                                            @endcan
                                            @can('Price List Read Created At')
                                                <th>Created At</th>
                                            @endcan
                                            @can('Price List Read Updated At')
                                                <th>Updated At</th>
                                            @endcan
                                            @can('Price List Read Created By')
                                                <th>Created By</th>
                                            @endcan
                                            @can('Price List Read Updated By')
                                                <th>Updated By</th>
                                            @endcan
                                            @can('Price List Edit')
                                                <th>Edit</th>
                                            @endcan
                                            @can('Price List Delete')
                                                <th>Delete</th>
                                            @endcan
                                        </tr>
                                    </tfoot>
                                </table>
                            @endcan
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

        columns: [
        @can('Price List Read')
            {
            data: 'id',
            name: 'id',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Code')
            {
            data: 'code',
            name: 'code',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Name')
            {
            data: 'name',
            name: 'name',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Group')
            {
            data: 'group',
            name: 'group',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Packing')
            {
            data: 'packing',
            name: 'packing',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read UOM')
            {
            data: 'uom',
            name: 'uom',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Box Price')
            {
            data: 'box_price',
            name: 'box_price',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Half Box Price')
            {
            data: 'half_box_price',
            name: 'half_box_price',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Wholesale Price')
            {
            data: 'wholesale_price',
            name: 'wholesale_price',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Cash Price')
            {
            data: 'cash_price',
            name: 'cash_price',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Credit Price')
            {
            data: 'credit_price',
            name: 'credit_price',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Description')
            {
            data: 'description',
            name: 'description',
            defaultContent: '',
            },
        @endcan
        @can('Price List Read Status')
            {
            data: 'status',
            name: 'status',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Created At')
            {
            data: 'created_at',
            name: 'created_at',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Updated At')
            {
            data: 'updated_at',
            name: 'updated_at',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Created By')
            {
            data: 'created_by',
            name: 'created_by',
            defaultContent: ''
            },
        @endcan
        @can('Price List Read Updated By')
            {
            data: 'updated_by',
            name: 'updated_by',
            defaultContent: ''
            },
        @endcan
        @can('Price List Edit')
            {
            data: 'editLink',
            name: 'editLink',
            defaultContent: ''
            },
        @endcan
        @can('Price List Delete')
            {
            data: 'deleteLink',
            name: 'deleteLink',
            defaultContent: ''
            },
        @endcan
        ]
    </x-links.script-yajara-dataTable>
    <script>
        function Refresh() {
            $('#example1').DataTable().ajax.reload();
            toastr.info('User Table Reloaded');
        }
    </script>


@endsection
