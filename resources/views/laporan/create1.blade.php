@extends('layouts.petugass')

@section('judulh1', 'Admin - Tambah Laporan')

@section('konten')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Laporan</h3>
            </div>
            <!-- Form Start -->
            <form action="{{ route('laporan.store', $priode_id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="petugas_id">Petugas ID</label>
                                <input type="text" class="form-control" id="petugas_id" name="petugas_id"
                                    value="{{ Auth::user()->name }}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="petugas_id">peternakan ID</label>
                                <input type="text" class="form-control" id="priode_id" name="priode_id" value="{{ $priode_id }}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="mdd_ci">MDD CI</label>
                                <input type="number" class="form-control" id="mdd_ci" name="mdd_ci" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_ci">Tanggal CI</label>
                                <input type="date" class="form-control" id="tgl_ci" name="tgl_ci" required>
                            </div>
                            <div class="form-group">
                                <label for="pop_e">Pop E</label>
                                <input type="number" class="form-control" id="pop_e" name="pop_e" required>
                            </div>
                            <div class="form-group">
                                <label for="bw_doc">BW DOC</label>
                                <input type="number" class="form-control" id="bw_doc" name="bw_doc" required>
                            </div>
                            <div class="form-group">
                                <label for="bw_doc">DOC</label>
                                <input type="text" class="form-control" id="doc" name="doc" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_pakan">Jenis Pakan</label>
                                <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" required>
                            </div>
                            <div class="form-group">
                                <label for="tkp_sak">TKP Sak</label>
                                <input type="number" class="form-control" id="tkp_sak" name="tkp_sak" required>
                            </div>
                            <div class="form-group">
                                <label for="sp_sak">SP Sak</label>
                                <input type="number" class="form-control" id="sp_sak" name="sp_sak" required>
                            </div>
                            <div class="form-group">
                                <label for="terpakai">Terpakai</label>
                                <input type="number" class="form-control" id="terpakai" name="terpakai" readonly>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur" readonly>
                            </div>
                            <div class="form-group">
                                <label for="mor_e">Mor E</label>
                                <input type="number" class="form-control" id="mor_e" name="mor_e" required>
                            </div>
                            <div class="form-group">
                                <label for="mor">Mor</label>
                                <input type="number" class="form-control" id="mor" name="mor" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ayam_hidup">Ayam Hidup</label>
                                <input type="number" class="form-control" id="ayam_hidup" name="ayam_hidup" readonly>
                            </div>
                            <div class="form-group">
                                <label for="bw">BW</label>
                                <input type="number" step="0.01" class="form-control" id="bw" name="bw"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="fi">FI</label>
                                <input type="number" step="0.01" class="form-control" id="fi" name="fi"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="act_fcr">Act FCR</label>
                                <input type="number" step="0.01" class="form-control" id="act_fcr" name="act_fcr" readonly>
                            </div>
                        </div>
                        <!-- Kolom Kanan -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="std_fcr">Std FCR</label>
                                <input type="number" step="0.01" class="form-control" id="std_fcr" name="std_fcr" readonly>
                            </div>
                            <div class="form-group">
                                <label for="dif">DIF</label>
                                <input type="number" step="0.01" class="form-control" id="dif" name="dif" readonly>
                            </div>
                            <div class="form-group">
                                <label for="pbbh">PBBH</label>
                                <input type="number" step="0.01" class="form-control" id="pbbh" name="pbbh" readonly>
                            </div>

                            <div class="form-group">
                                <label for="std_pbbh">STD PBBH</label>
                                <input type="number" step="0.01" class="form-control" id="std_pbbh" name="std_pbbh"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="progres">Progres</label>
                                <input type="number" class="form-control" id="progres" name="progres" required>
                            </div>
                            <div class="form-group">
                                <label for="ep">EP</label>
                                <input type="number" class="form-control" id="ep" name="ep" required>
                            </div>
                            <div class="form-group">
                                <label for="std_eph">STD EPH</label>
                                <input type="number" class="form-control" id="std_eph" name="std_eph" required>
                            </div>
                            <div class="form-group">
                                <label for="progres2">Progres 2</label>
                                <input type="number" class="form-control" id="progres2" name="progres2" required>
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input type="number" class="form-control" id="suhu" name="suhu" required>
                            </div>
                            <div class="form-group">
                                <label for="rh">RH</label>
                                <input type="number" class="form-control" id="rh" name="rh" required>
                            </div>
                            <div class="form-group">
                                <label for="hi">HI</label>
                                <input type="number" class="form-control" id="hi" name="hi" required>
                            </div>
                            <div class="form-group">
                                <label for="kepadatan">kepadatan</label>
                                <input type="number" class="form-control" id="kepadatan" name="kepadatan" required>
                            </div>
                            <div class="form-group">
                                <label for="tra">tra</label>
                                <input type="number" class="form-control" id="tra" name="tra" required>
                            </div>
                            <div class="form-group">
                                <label for="tma">tma</label>
                                <input type="number" class="form-control" id="tma" name="tma" required>
                            </div>
                            <div class="form-group">
                                <label for="treatment_ovk">treatment_ovk</label>
                                <input type="number" class="form-control" id="treatment_ovk" name="treatment_ovk" required>
                            </div>
                            <div class="form-group">
                                <label for="kondisi">Kondisi</label>
                                <input type="text" class="form-control" id="kondisi" name="kondisi" required>
                            </div>
                            <div class="form-group">
                                <label for="saran">Saran</label>
                                <input type="text" class="form-control" id="saran" name="saran" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
            </form>
        </div>
        <script>
            // terpakai = tkpSak-spSak
            document.addEventListener("DOMContentLoaded", function () {
    const tkpSakInput = document.getElementById("tkp_sak");
    const spSakInput = document.getElementById("sp_sak");
    const terpakaiInput = document.getElementById("terpakai");

    function hitungTerpakai() {
        const tkpSak = parseFloat(tkpSakInput.value) || 0;
        const spSak = parseFloat(spSakInput.value) || 0;
        const terpakai = tkpSak - spSak;
        terpakaiInput.value = terpakai >= 0 ? terpakai : 0;
    }

    tkpSakInput.addEventListener("input", hitungTerpakai);
    spSakInput.addEventListener("input", hitungTerpakai);
});
 //umur berdasarkan tanggal
            document.addEventListener("DOMContentLoaded", function () {
    const tglCiInput = document.getElementById("tgl_ci");
    const umurInput = document.getElementById("umur");

    tglCiInput.addEventListener("change", function () {
        const tglCiValue = tglCiInput.value;
        if (tglCiValue) {
            const tglSekarang = new Date();
            const tglCi = new Date(tglCiValue);

            const selisihWaktu = tglCi - tglSekarang;
            const selisihHari = Math.ceil(selisihWaktu / (1000 * 60 * 60 * 24));

            umurInput.value = selisihHari > 0 ? selisihHari : 0;
        } else {
            umurInput.value = "";
        }
    });
});
//more ayam hidup dan fi
document.addEventListener("DOMContentLoaded", function () {
    const popEInput = document.getElementById("pop_e");
    const morEInput = document.getElementById("mor_e");
    const bwInput = document.getElementById("bw");
    const terpakaiInput = document.getElementById("terpakai"); // Tambahkan elemen ini jika belum ada
    const morInput = document.getElementById("mor");
    const ayamHidupInput = document.getElementById("ayam_hidup");
    const fiInput = document.getElementById("fi");

    function hitungData() {
        const popE = parseFloat(popEInput.value) || 0;
        const morE = parseFloat(morEInput.value) || 0;
        const terpakai = parseFloat(terpakaiInput?.value) || 0;

        if (morE !== 0 && popE !== 0) {
            const mor = (morE / popE) * 100;
            const ayamHidup = popE - morE;

            // hindari pembagian dengan 0 untuk FI
            const fi = ayamHidup > 0 ? (terpakai * 50) / ayamHidup : 0;

            morInput.value = mor.toFixed(2);
            ayamHidupInput.value = ayamHidup;
            fiInput.value = fi.toFixed(3);
        } else {
            morInput.value = "";
            ayamHidupInput.value = "";
            fiInput.value = "";
        }
    }

    popEInput.addEventListener("input", hitungData);
    morEInput.addEventListener("input", hitungData);
    bwInput.addEventListener("input", hitungData);
    if (terpakaiInput) terpakaiInput.addEventListener("input", hitungData);
});
//std fcr act fcr dif
document.addEventListener("DOMContentLoaded", function () {
    const fiInput = document.getElementById("fi"); // Tambahkan input FI jika ada
    const bwInput = document.getElementById("bw"); // Tambahkan input BW jika ada
    const actFcrInput = document.getElementById("act_fcr");
    const stdFcrInput = document.getElementById("std_fcr");
    const difInput = document.getElementById("dif");

    function hitungActFcr() {
        const fi = parseFloat(fiInput?.value) || 0; // Ambil nilai FI atau default 0
        const bw = parseFloat(bwInput?.value) || 0; // Ambil nilai BW atau default 0

        if (fi !== 0 && bw !== 0) {
            const actFcr = fi / bw; // Hitung Act FCR
            actFcrInput.value = actFcr.toFixed(3);

            // Floor ke 2 desimal
            const bulat = Math.floor(bw * 100) / 100;

            // AJAX untuk mendapatkan Std FCR
            fetch(`/api/get-std-fcr?bw=${bulat}`)
                .then(response => response.json())
                .then(data => {
                    if (data.std_fcr) {
                        stdFcrInput.value = data.std_fcr.toFixed(3);

                        // Hitung DIF
                        const dif = actFcr - data.std_fcr;
                        difInput.value = dif.toFixed(3);
                    } else {
                        stdFcrInput.value = "";
                        difInput.value = "";
                    }
                })
                .catch(error => console.error("Error fetching Std FCR:", error));
        } else {
            actFcrInput.value = "";
            stdFcrInput.value = "";
            difInput.value = "";
        }
    }

    // Event listener pada FI dan BW
    if (fiInput) fiInput.addEventListener("input", hitungActFcr);
    if (bwInput) bwInput.addEventListener("input", hitungActFcr);
});


            </script>
            <script>
                //pbbh
                document.addEventListener('DOMContentLoaded', () => {
    const umurInput = document.getElementById('umur'); // Ambil elemen input umur
    const pbbhInput = document.getElementById('pbbh'); // Ambil elemen input pbbh

    // Trigger event input secara manual jika umur diisi otomatis
    if (umurInput.value) {
        umurInput.dispatchEvent(new Event('input'));
    }

    umurInput.addEventListener('input', () => {
        const umur = parseInt(umurInput.value, 10); // Ambil nilai umur dari input

        if (!umur || umur <= 0) {
            pbbhInput.value = ""; // Kosongkan pbbh jika umur tidak valid
            return;
        }

        // Fetch data dari API
        fetch(`/api/get-pbbh?umur=${umur}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log("Response data:", data); // Debug data API
                if (data.pbbh) {
                    pbbhInput.value = data.pbbh.toFixed(2); // Isi nilai pbbh jika ada
                    console.log("PBBH set to:", data.pbbh.toFixed(2)); // Log nilai pbbh yang di-set
                } else {
                    pbbhInput.value = ""; // Kosongkan pbbh jika tidak ada data
                }
            })
            .catch(error => {
                console.error("Error fetching PBBH:", error);
                pbbhInput.value = ""; // Kosongkan pbbh jika ada error
            });
    });
});


            </script>

    </div>
@endsection
