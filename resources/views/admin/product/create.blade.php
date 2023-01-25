@extends('admin.default')


@section('content')
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="Pname">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" class="form-control" name="Psupplier">
        </div>

        
        <div class="mb-3">
            <label class="form-label">kategory</label>
            <input type="text" class="form-control" name="Pcategory">
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="categories_id" id="" class="form-control">
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->Cname }}</option>
                @endforeach
            </select>
        </div>

        categorys

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" name="Pprice">
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Produk</label>
            <input type="file" class="form-control" name="Pphoto">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary me-1 mt-2">Simpan</button>
        </div>
    </form>
@endsection