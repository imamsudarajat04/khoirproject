@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Akun Baru')
@section('dataUser', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Akun Baru</h1>
        <div class="pull-right">
            <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('data-user.index') }}"><i class="fas fa-caret-left"></i> Kembali</a>
        </div>
    </div>

    <!-- Alert -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="my-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{ route('data-user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Nama</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="name" placeholder="Masukan Nama User" value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Email</label>
                                <div class="col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Masukan Email User" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Password</label>
                                <div class="col-12">
                                    <input type="password" class="form-control" name="password" placeholder="Masukan Password User" value="{{ old('password') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Konfirmasi Password</label>
                                <div class="col-12">
                                    <input type="password" class="form-control" name="confirm-password" placeholder="Konfirmasi Password User" value="{{ old('confirm-password') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Role</label>
                                <div class="col-12">
                                    <select name="role" class="form-control">
                                        <option value="" selected disabled>==Pilih==</option>
                                        <option value="admin">Admin</option>
                                        <option value="writer">Writer</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-plus"></i> Tambah User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection