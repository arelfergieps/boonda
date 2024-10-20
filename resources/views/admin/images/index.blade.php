@extends('admin.master')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel View</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Informasi</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('images.create')}}" class="btn btn-warning">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Tahun</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="text-center">
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td><img src="{{ asset('storage/'.$item->foto) }}" width="100px" alt="photo"></td>
                            <td>
                                <a href="{{ route('images.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('images.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="margin: 10px" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection

