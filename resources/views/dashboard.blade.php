@extends('layouts.template')

@section('judulh1', 'Dashboard')

@section('konten')

<div class="row">
    <div class="col-lg-3 col-md-6 col-12 mb-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalpeternakan }}</h3>
                <p>Total peternakan</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="{{ route('peternakan.index') }}" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12 mb-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalAdmins }}</h3>
                <p>Total Admin</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-shield"></i>
            </div>
            <a href="{{ route('pengguna.index') }}" class="small-box-footer">
                Lihat Pengguna <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    {{-- <!-- Fitur 3: Peserta Pelatihan -->
    <div class="col-lg-3 col-md-6 col-12 mb-4">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $totallaporan }}</h3>
                <p>Total Peserta Pelatihan</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('select.select') }}" class="small-box-footer">
                Lihat Peserta <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div> --}}

    <!-- Fitur 4: Laporan -->
    <div class="col-lg-3 col-md-6 col-12 mb-4">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $totallaporan }}</h3>
                <p>Total Laporan</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <a href="{{ route('select.select') }}" class="small-box-footer">
                Lihat Laporan <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>


<!-- 5 Data Pelatihan Terakhir -->

<div class="card mt-4 w-100">
    <div class="card-header">
        <h3 class="card-title">5 Data Pelatihan Terakhir</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama petugas</th>
                        <th>nama peternakan</th>
                        <th>alamat peternakan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latestlaporan as $laporan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $laporan->petugas->name }}</td>
                            <td>{{ $laporan->periode->peternakan->nama }}</td>
                            <td>{{ $laporan->periode->peternakan->alamat }}</td>
                            <td>{{ $laporan->created_at->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection
