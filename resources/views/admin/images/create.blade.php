@extends('admin.master')
@section('admin')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <h5 class="card-header">Add New Project</h5>
      <div class="card-body">
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi <span style="color: red;">*</span></label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun <span style="color: red;">*</span></label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun') }}" required />
            @error('tahun')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Upload Gambar <span style="color: red;">*</span></label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/*" required />
            @error('foto')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary">Save Project</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
