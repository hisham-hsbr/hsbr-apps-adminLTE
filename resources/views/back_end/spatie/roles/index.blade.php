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
    <h1>Roles index</h1>

@endsection
@section('actionFooter', 'Footer')
@section('footerLinks')

    <x-message.message />
@endsection
