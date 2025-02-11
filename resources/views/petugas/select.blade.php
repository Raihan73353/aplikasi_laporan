@extends('layouts.petugass')
@section('judulh1', 'petugas - laporan')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Peternakan dan Periode Aktif</h3>
        </div>
        <div class="card-body">
            @foreach ($data as $peternakan)
                <div class="peternakan">
                    <h4>Peternakan : {{ $peternakan->nama }}</h4><br>
                    @foreach ($priode as $p)
                    @if ($p->id_peternakan == $peternakan->id)
                        <a type="button" class="btn btn-warning" href="{{ route('laporan.show', $p->id) }}">
                            + Laporan (Priode ID: {{ $p->id }})
                        </a>
                    @endif
                @endforeach
                </div><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
