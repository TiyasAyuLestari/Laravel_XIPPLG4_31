@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
  <div class="container-fluid">
    <h1 class="mb-3">Dashboard Admin</h1>
    <div class="card">
      <div class="card-body">
        Selamat datang di panel admin <b>Dilesin Academy</b>
      </div>
    </div>
    <div class="card mt-3">
      <div class="card-header">
        <h5>Data Siswa</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
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
              <td>{{ $student->nis }}</td>
              <td>{{ $student->nama_lengkap }}</td>
              <td>{{ $student->jenis_kelamin }}</td>
              <td>{{ $student->nisn }}</td>
              <td>
                <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('admin.students.destroy', $student) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center">Tidak ada data siswa.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
