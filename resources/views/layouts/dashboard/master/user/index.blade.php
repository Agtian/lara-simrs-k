@extends('layouts.master')
@section('title', 'Dashboard')
@push('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
    </section>

    <section class="content">
        @livewire('dashboard.master.user.data-user')
    </section>
@endsection