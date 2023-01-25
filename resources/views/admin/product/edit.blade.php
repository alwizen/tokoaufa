@extends('admin.default');

@section('content')
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="Pname" value="{{ $product->Pname }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" class="form-control" name="Psupplier" value="{{ $product->Psupplier }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" class="form-control" name="Pcategory" value="{{ $product->Pcategory }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" name="Pprice" value="{{ $product->Pprice }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary me-1 mt-2">Simpan</button>
        </div>
    </form>

@endsection