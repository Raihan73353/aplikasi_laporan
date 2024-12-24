@extends('layouts.petugass')

@section('judulh1', 'petugas - edit Laporan')

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
                <h3 class="card-title">Edit Data Laporan</h3>
            </div>
            <!-- Form Start -->
            <form action="{{ route('laporanp.update', $laporan->id) }}" method="POST">
                @csrf
                @method('PUT')
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
                                <label for="tgl_kunjungan">tanggal kunjungan</label>
                                <input type="date" class="form-control" id="tgl_kunjungan" name="tgl_kunjungan"
                                    value="{{ $laporan->tgl_kunjungan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="petugas_id">peternakan ID</label>
                                <input type="text" class="form-control" id="priode_id" name="priode_id"
                                    value="{{ $laporan->priode_id }}" readonly required>
                            </div>
                            <div class="form-group">
                                <label for="mdd_ci">MDD CI</label>
                                <input type="number" class="form-control" id="mdd_ci" name="mdd_ci"
                                    value="{{ $laporan->mdd_ci }}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_ci">Tanggal CI</label>
                                <input type="date" class="form-control" id="tgl_ci" name="tgl_ci"
                                    value="{{ $laporan->tgl_ci }}"required>
                            </div>
                            <div class="form-group">
                                <label for="pop_e">Pop E</label>
                                <input type="number" class="form-control" id="pop_e" name="pop_e"
                                    value="{{ $laporan->pop_e }}" required>
                            </div>
                            <div class="form-group">
                                <label for="bw_doc">BW DOC</label>
                                <input type="number" class="form-control" id="bw_doc" name="bw_doc"
                                    value="{{ $laporan->bw_doc }}" required>
                            </div>
                            <div class="form-group">
                                <label for="bw_doc">DOC</label>
                                <input type="text" class="form-control" id="doc" name="doc"
                                    value="{{ $laporan->doc }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_pakan">Jenis Pakan</label>
                                <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan"
                                    value="{{ $laporan->jenis_pakan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tkp_sak">TKP Sak</label>
                                <input type="number" class="form-control" id="tkp_sak" name="tkp_sak"
                                    value="{{ $laporan->tkp_sak }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sp_sak">SP Sak</label>
                                <input type="number" class="form-control" id="sp_sak" name="sp_sak"
                                    value="{{ $laporan->sp_sak }}" required>
                            </div>
                            <div class="form-group">
                                <label for="terpakai">Terpakai</label>
                                <input type="number" class="form-control" id="terpakai" name="terpakai"
                                    value="{{ $laporan->terpakai }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur"
                                    value="{{ $laporan->umur }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="mor_e">Mor E</label>
                                <input type="number" class="form-control" id="mor_e" name="mor_e"
                                    value="{{ $laporan->mor_e }}" required>
                            </div>
                            <div class="form-group">
                                <label for="mor">Mor</label>
                                <input type="number" class="form-control" id="mor" name="mor"
                                    value="{{ $laporan->mor }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ayam_hidup">Ayam Hidup</label>
                                <input type="number" class="form-control" id="ayam_hidup" name="ayam_hidup"
                                    value="{{ $laporan->ayam_hidup }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="bw">BW</label>
                                <input type="number" step="0.001" class="form-control" id="bw" name="bw"
                                    value="{{ $laporan->bw }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fi">FI</label>
                                <input type="number" step="0.01" class="form-control" id="fi" name="fi"
                                    value="{{ $laporan->fi }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="act_fcr">Act FCR</label>
                                <input type="number" step="0.01" class="form-control" id="act_fcr" name="act_fcr"
                                    value="{{ $laporan->act_fcr }}" readonly>
                            </div>
                        </div>
                        <!-- Kolom Kanan -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="std_fcr">Std FCR</label>
                                <input type="number" step="0.01" class="form-control" id="std_fcr" name="std_fcr"
                                    value="{{ $laporan->std_fcr }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="dif">DIF</label>
                                <input type="number" step="0.01" class="form-control" id="dif" name="dif"
                                    value="{{ $laporan->dif }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="pbbh">PBBH</label>
                                <input type="number" class="form-control" id="pbbh" name="pbbh"
                                    value="{{ $laporan->pbbh }}" required>
                            </div>

                            <div class="form-group">
                                <label for="std_pbbh">STD PBBH</label>
                                <input type="number" step="0.01" class="form-control" id="std_pbbh"
                                    value="{{ $laporan->std_pbbh }}" name="std_pbbh" readonly>
                            </div>
                            <div class="form-group">
                                <label for="progres">Progres</label>
                                <input type="number" step="1" class="form-control" id="progres" name="progres"
                                    value="{{ $laporan->progres }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="ep">EP</label>
                                <input type="number" step="1" class="form-control" id="ep" name="ep"
                                    value="{{ $laporan->ep }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="std_eph">STD EPH</label>
                                <input type="number" class="form-control" id="std_eph" name="std_eph"
                                    value="{{ $laporan->std_eph }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="progres2">Progres 2</label>
                                <input type="number" step="1" class="form-control" id="progres2"
                                    value="{{ $laporan->progres2 }}" name="progres2" readonly>
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input type="number" class="form-control" id="suhu" name="suhu"
                                    value="{{ $laporan->suhu }}" required>
                            </div>
                            <div class="form-group">
                                <label for="rh">RH</label>
                                <input type="number" class="form-control" id="rh" name="rh"
                                    value="{{ $laporan->rh }}" required>
                            </div>
                            <div class="form-group">
                                <label for="hi">HI</label>
                                <input type="number" class="form-control" id="hi" name="hi"
                                    value="{{ $laporan->hi }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="kepadatan">kepadatan</label>
                                <input type="number" class="form-control" id="kepadatan" name="kepadatan"
                                    value="{{ $laporan->kepadatan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tra">tra</label>
                                <input type="number" class="form-control" id="tra" name="tra"
                                    value="{{ $laporan->tra }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tma">tma</label>
                                <input type="number" class="form-control" id="tma" name="tma"
                                    value="{{ $laporan->tma }}" required>
                            </div>
                            <div class="form-group">
                                <label for="treatment_ovk">treatment ovk</label>
                                <input type="text" class="form-control" id="treatment_ovk" name="treatment_ovk"
                                    value="{{ $laporan->treatment_ovk }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kondisi">Kondisi</label>
                                <input type="text" class="form-control" id="kondisi" name="kondisi"
                                    value="{{ $laporan->kondisi }}" required>
                            </div>
                            <div class="form-group">
                                <label for="saran">Saran</label>
                                <input type="text" class="form-control" id="saran" name="saran"
                                    value="{{ $laporan->saran }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">edit</button>
                </div>
            </form>
        </div>

        {{-- <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Mengambil elemen input
                const tkpSak = document.getElementById('tkp_sak');
                const spSak = document.getElementById('sp_sak');
                const tglCi = document.getElementById('tgl_ci');
                const morE = document.getElementById('mor_e');
                const bw = document.getElementById('bw');
                const popE = document.getElementById('pop_e');
                const suhu = document.getElementById('suhu');
                const rh = document.getElementById('rh');

                const terpakai = document.getElementById('terpakai');
                const umur = document.getElementById('umur');
                const mor = document.getElementById('mor');
                const ayamHidup = document.getElementById('ayam_hidup');
                const fi = document.getElementById('fi');
                const actFcr = document.getElementById('act_fcr');
                const stdFcr = document.getElementById('std_fcr');
                const dif = document.getElementById('dif');
                const stdPbbh = document.getElementById('std_pbbh');
                const progres = document.getElementById('progres');
                const ep = document.getElementById('ep');
                const stdEph = document.getElementById('std_eph');
                const progres2 = document.getElementById('progres2');
                const hi = document.getElementById('hi');

                // Fungsi untuk menghitung umur dari tanggal CI
                function calculateUmur() {
                    const currentDate = new Date();
                    const ciDate = new Date(tglCi.value);
                    const diffTime = Math.abs(currentDate - ciDate);
                    return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                }

                // Fungsi untuk menghitung semua nilai
                function calculateValues() {
                    // Terpakai
                    terpakai.value = tkpSak.value - spSak.value;

                    // Umur
                    umur.value = tglCi.value ? calculateUmur() : '';

                    if (morE.value && popE.value && bw.value) {
                        // Mor dan Ayam Hidup
                        const calculatedMor = (morE.value / popE.value * 100).toFixed(2);
                        mor.value = calculatedMor;
                        ayamHidup.value = popE.value - morE.value;

                        if (calculatedMor > 3) {
                            mor.style.color = 'red';
                        } else if (calculatedMor<=3){
                            mor.style.color = 'green'
                        }
                        else {
                            mor.style.color = '';
                        }

                        // FI dan Act FCR
                        fi.value = (terpakai.value * 50 / ayamHidup.value).toFixed(3);
                        actFcr.value = (fi.value / bw.value).toFixed(3);

                        // Standar FCR
                        const bulat = Math.floor(bw.value * 100) / 100;
                        fetch(`/api/fcr?bw=${bulat}`)
                            .then(response => response.json())
                            .then(data => {
                                stdFcr.value = data.fcr || '';
                                const calculatedDif = (actFcr.value - stdFcr.value).toFixed(3);
                                dif.value = calculatedDif;

                                if (calculatedDif > 0) {
                                    dif.style.color = 'red';
                                } else if (calculatedDif < 0) {
                                    dif.style.color = 'green';
                                } else {
                                    dif.style.color = '';
                                }
                            });
                    }

                    //progres
                    document.getElementById('pbbh').addEventListener('input', updateProgres);
                    document.getElementById('std_pbbh').addEventListener('input', updateProgres);

                    function updateProgres() {
                        const pbbh = parseFloat(document.getElementById('pbbh').value);
                        const std_pbbh = parseFloat(document.getElementById('std_pbbh').value);
                        const progresInput = document.getElementById('progres');

                        const progres = calculateProgres(pbbh, std_pbbh);

                        if (progres !== null) {
                            progresInput.value = progres;

                            if (progres < 0) {
                                progresInput.style.color = 'red';
                            } else {
                                progresInput.style.color = 'green';
                            }
                        } else {
                            progresInput.value = '';
                            progresInput.style.color = '';
                        }
                    }

                    function calculateProgres(pbbh, std_pbbh) {
                        if (!isNaN(pbbh) && !isNaN(std_pbbh)) {
                            return pbbh - std_pbbh;
                        } else {
                            return null;
                        }
                    }



                    // STD PBBH
                    fetch(`/api/pbbh?umur=${umur.value}`)
                        .then(response => response.json())
                        .then(data => {
                            stdPbbh.value = data.pbbh || '';
                            progres.value = (stdPbbh.value ? (parseFloat(stdPbbh.value) - stdPbbh.value).toFixed(
                                2) : '');
                        });

                    // EP dan Progres 2
                    if (bw.value && fi.value) {
                        ep.value = (bw.value / fi.value * 100).toFixed(0);
                        fetch(`/api/eph?umur=${umur.value}`)
                            .then(response => response.json())
                            .then(data => {
                                stdEph.value = data.eph || '';
                                progres2.value = (ep.value && stdEph.value ? (ep.value - stdEph.value).toFixed(0) :
                                    '');
                            });
                    }
                    //warna progres 2
                    if (bw.value && fi.value) {
                        ep.value = (bw.value / fi.value * 100).toFixed(0);

                        fetch(`/api/eph?umur=${umur.value}`)
                            .then(response => response.json())
                            .then(data => {
                                stdEph.value = data.eph || '';
                                if (ep.value && stdEph.value) {
                                    const progres2Value = (ep.value - stdEph.value).toFixed(0);
                                    progres2.value = progres2Value;

                                    // Ubah warna teks berdasarkan nilai progres2
                                    if (progres2Value < 0) {
                                        progres2.style.color = 'red'; // Warna merah
                                    } else {
                                        progres2.style.color = 'green'; // Warna hijau
                                    }
                                } else {
                                    progres2.value = '';
                                    progres2.style.color = ''; // Reset warna teks
                                }
                            })
                            .catch(error => {
                                console.error('Error fetching EPH:', error);
                                progres2.value = '';
                                progres2.style.color = ''; // Reset warna teks jika terjadi kesalahan
                            });
                    }


                    // HI
                    if (suhu.value && rh.value) {
                        const farenheit = Math.floor((suhu.value * 9 / 5) + 32);
                        hi.value = farenheit + parseInt(rh.value, 10);

                    }
                    //warna hi
                    document.getElementById('suhu').addEventListener('input', updateHi);
                    document.getElementById('rh').addEventListener('input', updateHi);

                    function updateHi() {
                        const suhu = document.getElementById('suhu');
                        const rh = document.getElementById('rh');
                        const hi = document.getElementById('hi');

                        if (suhu.value && rh.value) {
                            const farenheit = Math.floor((suhu.value * 9 / 5) + 32);
                            const hiValue = farenheit + parseInt(rh.value, 10);

                            hi.value = hiValue;

                            // Ubah warna teks berdasarkan nilai HI
                            if (hiValue > 160) {
                                hi.style.color = 'red'; // Warna merah
                            } else {
                                hi.style.color = ''; // Warna hijau
                            }
                        } else {
                            hi.value = '';
                            hi.style.color = ''; // Reset warna teks
                        }
                    }


                }

                // Event listener untuk semua input
                [tkpSak, spSak, tglCi, morE, bw, popE, suhu, rh].forEach(input => {
                    input.addEventListener('input', calculateValues);
                });
            });
        </script> --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Mengambil elemen input
                const tkpSak = document.getElementById('tkp_sak');
                const spSak = document.getElementById('sp_sak');
                const tgl_kunjungan = document.getElementById('tgl_kunjungan');
                const tglCi = document.getElementById('tgl_ci');
                const morE = document.getElementById('mor_e');
                const bw = document.getElementById('bw');
                const popE = document.getElementById('pop_e');
                const suhu = document.getElementById('suhu');
                const rh = document.getElementById('rh');

                const terpakai = document.getElementById('terpakai');
                const umur = document.getElementById('umur');
                const mor = document.getElementById('mor');
                const ayamHidup = document.getElementById('ayam_hidup');
                const fi = document.getElementById('fi');
                const actFcr = document.getElementById('act_fcr');
                const stdFcr = document.getElementById('std_fcr');
                const dif = document.getElementById('dif');
                const stdPbbh = document.getElementById('std_pbbh');
                const progres = document.getElementById('progres');
                const ep = document.getElementById('ep');
                const stdEph = document.getElementById('std_eph');
                const progres2 = document.getElementById('progres2');
                const hi = document.getElementById('hi');

                // Fungsi untuk menghitung umur dari tanggal CI
                function calculateUmur() {
                    const tglKunjungan = new Date(tgl_kunjungan.value);
                    const ciDate = new Date(tglCi.value);
                    const diffTime = Math.abs(tglKunjungan - ciDate);
                    return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                }

                // Fungsi untuk mengambil nilai std_pbbh
                async function fetchStdPbbh() {
                    try {
                        if (umur.value) {
                            const response = await fetch(`/api/pbbh?umur=${umur.value}`);
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            const data = await response.json();
                            console.log("Response for std_pbbh:", data); // Debugging
                            stdPbbh.value = data.pbbh || '';
                            updateProgres(); // Perbarui progres setelah std_pbbh terisi
                        } else {
                            stdPbbh.value = ''; // Reset jika umur tidak valid
                        }
                    } catch (error) {
                        console.error("Error fetching std_pbbh:", error);
                        stdPbbh.value = ''; // Reset jika ada kesalahan
                    }
                }

                // Fungsi untuk menghitung semua nilai
                function calculateValues() {
                    // Terpakai
                    terpakai.value = tkpSak.value - spSak.value;

                    // Umur berdasarkan selisih tanggal kunjungan dan tgl_ci
                    if (tglCi.value && tgl_kunjungan.value) {
                        umur.value = calculateUmur();
                        fetchStdPbbh(); // Panggil untuk memperbarui std_pbbh setiap kali umur berubah
                    } else {
                        umur.value = '';
                        stdPbbh.value = ''; // Reset jika tidak valid
                    }

                    // Mor dan Ayam Hidup
                    if (morE.value && popE.value) {
                        const calculatedMor = (morE.value / popE.value * 100).toFixed(2);
                        mor.value = calculatedMor;
                        ayamHidup.value = popE.value - morE.value;

                        mor.style.color = calculatedMor > 3 ? 'red' : 'green';
                    }

                    // FI dan Act FCR
                    if (terpakai.value && ayamHidup.value && bw.value) {
                        fi.value = (terpakai.value * 50 / ayamHidup.value).toFixed(3);
                        actFcr.value = (fi.value / bw.value).toFixed(3);

                        // Standar FCR
                        const bulat = Math.floor(bw.value * 100) / 100;
                        fetch(`/api/fcr?bw=${bulat}`)
                            .then(response => response.json())
                            .then(data => {
                                stdFcr.value = data.fcr || '';
                                const calculatedDif = (actFcr.value - stdFcr.value).toFixed(3);
                                dif.value = calculatedDif;

                                dif.style.color = calculatedDif > 0 ? 'red' : 'green';
                            });
                    }

                    // EP dan Progres 2
                    if (bw.value && fi.value) {
                        ep.value = (bw.value / fi.value * 100).toFixed(0);
                        fetch(`/api/eph?umur=${umur.value}`)
                            .then(response => response.json())
                            .then(data => {
                                stdEph.value = data.eph || '';
                                if (ep.value && stdEph.value) {
                                    const progres2Value = (ep.value - stdEph.value).toFixed(0);
                                    progres2.value = progres2Value;
                                    progres2.style.color = progres2Value < 0 ? 'red' : 'green';
                                } else {
                                    progres2.value = '';
                                    progres2.style.color = '';
                                }
                            });
                    }

                    // HI
                    if (suhu.value && rh.value) {
                        const farenheit = Math.floor((suhu.value * 9 / 5) + 32);
                        const hiValue = farenheit + parseInt(rh.value, 10);
                        hi.value = hiValue;
                        hi.style.color = hiValue > 160 ? 'red' : '';
                    }
                }

                // Fungsi untuk memperbarui progres
                function updateProgres() {
                    const pbbh = parseFloat(document.getElementById('pbbh').value);
                    const std_pbbh = parseFloat(stdPbbh.value);

                    if (!isNaN(pbbh) && !isNaN(std_pbbh)) {
                        const progresValue = (pbbh - std_pbbh).toFixed(0);
                        progres.value = progresValue;
                        progres.style.color = progresValue < 0 ? 'red' : 'green';
                    } else {
                        progres.value = '';
                        progres.style.color = '';
                    }
                }

                // Event listener untuk semua input
                [tkpSak, spSak, tglCi, morE, bw, popE, suhu, rh].forEach(input => {
                    input.addEventListener('input', calculateValues);
                });

                document.getElementById('pbbh').addEventListener('input', updateProgres);
            });
        </script>
    </div>
@endsection
