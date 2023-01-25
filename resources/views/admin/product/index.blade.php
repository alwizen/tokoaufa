@extends('admin.default')

@section('content')

<a href="{{ route('product.create') }}" class="btn btn-primary btn-icon-split mb-3">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Tambah Barang</span>
</a>

    <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Foto Produk</th>
                <th class="text-center">Supplier</th>
                <th class="text-center">Kategori</th>
                <th class="text-center">Kategori id</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $no => $item)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $item->Pname }}</td>
                    <td class="text-center">
                        <img src="{{ asset('storage/' . $item->Pphoto) }}" height="100px" class="rounded-circle">
                    </td>
                    <td>{{ $item->Psupplier }}</td>
                    <td>{{ $item->Pcategory }}</td>
                    <td>{{ $item->categories_id }}</td>
                    <td> @currency($item->Pprice) </td>
                    <td class="text-center">
                        <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning btn-circle"><i class="fas fa-pen"></i></a>
                            <input type="submit" value="Hapus" class="btn btn-danger">
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection