@include('layout.header')
<!-- Wrapper Start -->
<div class="wrapper">
    @include('layout.sidebar')
    @include('layout.topnav')

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row m-2 d-flex justify-content-center">
                                <img src="{{ asset('datum/assets/images/edi.png') }}" alt="" width="300">
                            </div>
                            <div class="m-2 text-center">
                                <p>PT. EDI INDONESIA<br>
                                    Wisma SMR, 10th Floor<br>
                                    Jl. Yos Sudarso Kav 85 No.89, Jakarta, 14360 Indonesia <br>
                                    Tel: (021) 6505829 | Fax: (021) 6505987 <br>
                                    https://edi-indonesia.co.id/id/
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('add-biodata') }}" class="needs-validation mx-1"
                                novalidate>
                                @csrf
                                <input type="hidden" class="form-control" id="validationTooltip05" name="id_user"
                                    value="{{ Auth::user()->id }}">
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Posisi yang Dilamar</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="posisi" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Nama</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="nama" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Nomor KTP</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="no_ktp" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Tempat Lahir</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="tmp_lahir" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-2 m-auto text-right">
                                        <label for="validationTooltip05">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="date" class="form-control" id="validationTooltip05"
                                            name="tgl_lahir" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="jk" id="radio2" value="Laki-laki">
                                            <label for="radio2">Laki-laki</label>
                                        </div>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="jk" id="radio2" value="Perempuan">
                                            <label for="radio2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="inputGroupSelect01">Agama</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="custom-select" id="inputGroupSelect01" name="agama">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Golongan Darah</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="gol_darah" id="radio2" value="A">
                                            <label for="radio2">A</label>
                                        </div>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="gol_darah" id="radio2" value="AB">
                                            <label for="radio2">AB</label>
                                        </div>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="gol_darah" id="radio2" value="B">
                                            <label for="radio2">B</label>
                                        </div>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="gol_darah" id="radio2" value="O">
                                            <label for="radio2">O</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="inputGroupSelect01">Status</label>
                                    </div>
                                    <div class="col-9">
                                        <select class="custom-select" id="inputGroupSelect01" name="status">
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="exampleFormControlTextarea1">Alamat KTP</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="alamat_ktp"></textarea>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="exampleFormControlTextarea1">Alamat Domisili</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="alamat_domisili"></textarea>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Email</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="email" class="form-control" id="validationTooltip05"
                                            name="email" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">No. Telp</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="no_hp" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Orang terdekat yang dapat dihubungi</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="close_person" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Pendidikan Terakhir</label>
                                    </div>
                                    <div class="col-3">
                                        <select class="custom-select" id="inputGroupSelect01" name="jenjang">
                                            <option selected disabled>Jenjang Pendidikan</option>
                                            <option value="SMA/SMK">SMA/SMK</option>
                                            <option value="Diploma">Diploma 1/2/3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="institusi" placeholder="Nama Institusi" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="jurusan" placeholder="Jurusan" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="tahun_lulus" placeholder="Tahun" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="ipk" placeholder="IPK" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3 m-auto">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Riwayat Pelatihan</label>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="nama_kursus" placeholder="Nama Kursus" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="tahuns" placeholder="Tahun" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05" class="mr-3">Sertifikat</label>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="sertifikat" id="radio2" value="1">
                                            <label for="radio2">Ya</label>
                                        </div>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="sertifikat" id="radio2" value="0">
                                            <label for="radio2">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Riwayat Pekerjaan</label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="perusahaan" placeholder="Nama Perusahaan" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="posisi" placeholder="Posisi Terakhir" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="salary" placeholder="Pendapatan Terakhir" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="tahun" placeholder="Tahun Bekerja" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                    <div class="col-3 m-auto">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="exampleFormControlTextarea1">Skill</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="skills"></textarea>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Bersedia ditempatkan di seluruh
                                            perusahaan</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="placement" id="radio2" value="1">
                                            <label for="radio2">Ya</label>
                                        </div>
                                        <div class="radio d-inline-block mr-2">
                                            <input type="radio" name="placement" id="radio2" value="0">
                                            <label for="radio2">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-3 m-auto">
                                        <label for="validationTooltip05">Penghasilan yang diharapkan</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="validationTooltip05"
                                            name="salary" required>
                                        <div class="invalid-tooltip">
                                            Please Add the Data!
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Wrapper End-->
@include('layout.footer')

<!-- Backend Bundle JavaScript -->
@include('layout.script')

</body>

</html>
