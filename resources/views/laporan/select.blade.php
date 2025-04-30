@extends('layouts.template')
@section('judulh1', 'Admin - Peternakan')

@section('konten')
<style>
    .peternakan {
            margin-bottom: 20px;
        }
        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
</style>
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
                    <h4>Peternakan : {{ $peternakan->nama }}</h4>
                    <div class="button-container">
                    @foreach ($priode as $p)
                    @if ($p->id_peternakan == $peternakan->id)
                        <a type="button" class="btn btn-warning" href="{{ route('laporan.show', $p->id) }}">
                            + Laporan (Periode ID: {{ $p->id }})
                        </a>
                    @endif
                @endforeach
            </div>
                </div><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
