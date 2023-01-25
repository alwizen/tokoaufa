@extends('admin.default');

@section('content')
<a href="{{ route('client.create') }}" class="btn btn-circle btn-outline-primary mb-3"><i class="fas fa-plus"></i></a>
    <table class="table table-bordered" id="dataTable">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($clients as $no => $client)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $client->name }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $client->photo) }}" alt="" width="50px" class="rounded-circle shadow-4-strong">
                    </td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('client.edit', $client->id) }}" class="btn btn-dark">Edit</a>
                            <input type="submit" value="Hapus" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection