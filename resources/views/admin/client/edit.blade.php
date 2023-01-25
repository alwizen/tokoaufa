@extends('admin.default');

@section('content')
    <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="name" value="{{ $client->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="address" value="{{ $client->address }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Telp</label>
            <input type="text" class="form-control" name="phone" value="{{ $client->phone }}">
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