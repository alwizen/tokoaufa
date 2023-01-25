@extends('admin.default');

@section('content')
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="address">
        </div>

        <div class="mb-3">
            <label class="form-label">Telp</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" class="form-control form-control-sm" name="photo">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary me-1 mt-2">Simpan</button>
        </div>
    </form>    

@endsection