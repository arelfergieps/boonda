@extends('admin.master')
@section('admin')

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Project Management</h5>
    <div class="card-body">
      <form id="projectForm" class="mb-4" enctype="multipart/form-data">
        <input type="hidden" id="projectId" />
        <div class="row mb-3">
          <div class="col-auto">
            <a href="{{ route('images.create') }}" class="btn btn-primary">Add Project</a>
          </div>          
        </div>
      </form>

      <!-- Form untuk Sorting -->
      <form method="GET" action="{{ route('images.index') }}" class="mb-4">
    
        <div class="col-auto">
            <label for="sort_order" class="form-label">Tahun:</label>
            <select name="sort_order" id="sort_order" class="form-select">
                <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Naik</option>
                <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Turun</option>
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-secondary mt-3">Sort</button>
        </div>
        <input type="hidden" name="tahun" value="{{ request('tahun') }}"> <!-- Jika tahun ada di request, sertakan juga -->
    </div>
</form>


      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Descripsi</th>
              <th>Years</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0" id="projectTableBody">
            @foreach ($data as $item)
            <tr>
              <td><span>{{ $item->nama }}</span></td>
              <td>{{ Str::limit($item->deskripsi, 70, '...') }}</td>
              <td><span>{{ $item->tahun }}</span></td>
              <td><img src="{{ asset('storage/'.$item->foto) }}" alt="Angular Project" class="img-thumbnail" width="50" /></td>
              <td>
                <a href="{{ route('images.edit', $item->id) }}" class="btn btn-warning btn-sm" style="margin: 5px" onclick="editProject(this); return false;"> Edit</a>
                <form action="{{ route('images.delete', $item->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" style="margin: 5px" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                </form>              
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
