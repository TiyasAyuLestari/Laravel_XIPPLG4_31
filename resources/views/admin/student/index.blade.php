@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Siswa</h3>
          <div class="card-tools">
            <a href="{{ route('admin.students.create') }}" class="btn btn-primary btn-sm">
              <i class="fas fa-plus"></i> Tambah Siswa
            </a>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>NISN</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse($students as $student)
              <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->nama_lengkap }}</td>
                <td>{{ $student->jenis_kelamin }}</td>
                <td>{{ $student->nisn }}</td>
                <td>
                  <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="6" class="text-center">Belum ada data siswa.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
