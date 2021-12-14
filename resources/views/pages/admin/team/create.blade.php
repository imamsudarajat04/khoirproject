@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Team Baru')
@section('dataTeam', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Team Baru</h1>
        <div class="pull-right">
            <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('data-team.index') }}"><i class="fas fa-caret-left"></i> Kembali</a>
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
                    <form action="{{ route('data-team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Nama Lengkap</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="name" placeholder="Masukan Nama Lengkap" value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Devisi</label>
                                <div class="col-12">
                                    <select class="form-control" name="devision_id">
                                        <option value="" selected disabled>Pilih Devisi</option>
                                        @foreach ($devisions as $devision)
                                            <option value="{{ $devision->id }}">{{ $devision->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-2">
                                    <div class="row">
                                        <label class="col-12 control-label">Avatar</label>
                                        <div class="col-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="avatar" id="customFile1">
                                                <label class="custom-file-label" for="customFile">Pilih..</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-2">
                                    <div class="row">
                                        <label class="col-12 control-label">Link Facebook</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="facebook_link" placeholder="Masukan Link Facebook" value="{{ old('facebook_link') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-2">
                                    <div class="row">
                                        <label class="col-12 control-label">Link Twitter</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="twitter_link" placeholder="Masukan Link Twitter" value="{{ old('twitter_link') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-2">
                                    <div class="row">
                                        <label class="col-12">Link Instagram</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="instagram_link" placeholder="Masukan Link Instagram" value="{{ old('instagram_link') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-2">
                                    <div class="row">
                                        <label class="col-12">Link Linkedin</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="linked_link" placeholder="Masukan Link Linkedin" value="{{ old('linked_link') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-plus"></i> Tambah Team</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('customjs')
<script>
    $('#customFile1').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        //clean fake path
        var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(cleanFileName);
    });
</script>
@endpush