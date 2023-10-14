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
    <h1>Users index</h1>

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
