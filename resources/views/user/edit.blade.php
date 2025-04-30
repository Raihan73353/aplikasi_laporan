@extends('layouts.template')
@section('judulh1','Admin - Ubah Data Pengguna')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some masalah dengan input Anda.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Pengguna</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">username</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->username }}" readonly>
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control" id="password" value="" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label><br>
                    <input type="radio" name="role" value="admin" {{ $user->role == 'admin' ? 'checked' : '' }}> <b>Admin</b>
                    <input type="radio" name="role" value="petugas" {{ $user->role == 'petugas' ? 'checked' : '' }}> <b>Petugas</b>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
