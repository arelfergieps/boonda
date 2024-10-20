@extends('admin.master')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Data Informasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control-file" id="foto">
                </div>
                <div class="form-group">
                    <label for="judul">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="tahun" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" required></textarea>
                </div>
                <button style="margin-top: 10px" type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</main>
@endsection

@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        $("#validate").validate({
            rules: {
                tahun: { required: true },
                deskripsi: { required: true },
                foto: { required: false },  // Foto optional
            },
            messages: {
                tahun: { required: "Tahun harus diisi." },
                deskripsi: { required: "Deskripsi harus diisi." },
            },
        });
    });
</script>
@endpush
