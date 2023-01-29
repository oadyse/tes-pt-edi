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
                            @if (Auth::user()->role == 'admin')
                                <form method="POST" action="{{ route('editpost-data', base64_encode($id)) }}"
                                    class="needs-validation mx-1" novalidate>
                                @else
                                    <form method="POST" action="{{ route('editpost-biodata', base64_encode($id)) }}"
                                        class="needs-validation mx-1" novalidate>
                            @endif
                            @csrf
                            <input type="hidden" class="form-control" id="validationTooltip05" name="id_user"
                                value="{{ Auth::user()->id }}">
                            <div class="form-row mb-3">
                                <div class="col-3 m-auto">
                                    <label for="validationTooltip05">Posisi yang Dilamar</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="validationTooltip05" name="posisi"
                                        required value="{{ $data->posisi }}">
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
                                    <input type="text" class="form-control" id="validationTooltip05" name="nama"
                                        required value="{{ $data->nama }}">
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
                                    <input type="text" class="form-control" id="validationTooltip05" name="no_ktp"
                                        required value="{{ $data->no_ktp }}">
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
                                    <input type="text" class="form-control" id="validationTooltip05" name="tmp_lahir"
                                        required value="{{ $data->tmp_lahir }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-2 m-auto text-right">
                                    <label for="validationTooltip05">Tanggal Lahir</label>
                                </div>
                                <div class="col-4">
                                    <input type="date" class="form-control" id="validationTooltip05" name="tgl_lahir"
                                        required value="{{ $data->tgl_lahir }}">
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
                                        <input type="radio" name="jk" id="radio2" value="Laki-laki"
                                            {{ $data->jk == 'Laki-laki' ? 'checked' : '' }}>
                                        <label for="radio2">Laki-laki</label>
                                    </div>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="jk" id="radio2" value="Perempuan"
                                            {{ $data->jk == 'Perempuan' ? 'checked' : '' }}>
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
                                        <option value="Islam" {{ $data->agama == 'Islam' ? 'selected' : '' }}>
                                            Islam</option>
                                        <option value="Kristen Protestan"
                                            {{ $data->agama == 'Kristen Protestan' ? 'selected' : '' }}>
                                            Kristen Protestan</option>
                                        <option value="Katolik" {{ $data->agama == 'Katolik' ? 'selected' : '' }}>
                                            Katolik</option>
                                        <option value="Hindu" {{ $data->agama == 'Hindu' ? 'selected' : '' }}>
                                            Hindu
                                        </option>
                                        <option value="Budha" {{ $data->agama == 'Budha' ? 'selected' : '' }}>
                                            Budha
                                        </option>
                                        <option value="Konghucu" {{ $data->agama == 'Konghucu' ? 'selected' : '' }}>
                                            Konghucu</option>
                                        <option value="Lainnya" {{ $data->agama == 'Lainnya' ? 'selected' : '' }}>
                                            Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-3 m-auto">
                                    <label for="validationTooltip05">Golongan Darah</label>
                                </div>
                                <div class="col-9">
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="gol_darah" id="radio2" value="A"
                                            {{ $data->gol_darah == 'A' ? 'checked' : '' }}>
                                        <label for="radio2">A</label>
                                    </div>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="gol_darah" id="radio2" value="AB"
                                            {{ $data->gol_darah == 'AB' ? 'checked' : '' }}>
                                        <label for="radio2">AB</label>
                                    </div>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="gol_darah" id="radio2" value="B"
                                            {{ $data->gol_darah == 'B' ? 'checked' : '' }}>
                                        <label for="radio2">B</label>
                                    </div>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="gol_darah" id="radio2" value="O"
                                            {{ $data->gol_darah == 'O' ? 'checked' : '' }}>
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
                                        <option value="Belum Menikah"
                                            {{ $data->status == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah
                                        </option>
                                        <option value="Menikah" {{ $data->status == 'Menikah' ? 'selected' : '' }}>
                                            Menikah</option>
                                        <option value="Cerai Hidup"
                                            {{ $data->status == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup
                                        </option>
                                        <option value="Cerai Mati"
                                            {{ $data->status == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-3 m-auto">
                                    <label for="exampleFormControlTextarea1">Alamat KTP</label>
                                </div>
                                <div class="col-9">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="alamat_ktp">{{ $data->alamat_ktp }}</textarea>
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="alamat_domisili">{{ $data->alamat_domisili }}</textarea>
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
                                        name="email" required value="{{ $data->email }}">
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
                                        name="no_hp" required value="{{ $data->no_hp }}">
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
                                        name="close_person" required value="{{ $data->close_person }}">
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
                                        <option disabled>Jenjang Pendidikan</option>
                                        <option value="SMA/SMK"
                                            {{ $data->pendidikan->jenjang == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK
                                        </option>
                                        <option value="Diploma"
                                            {{ $data->pendidikan->jenjang == 'Diploma' ? 'selected' : '' }}>Diploma
                                            1/2/3</option>
                                        <option value="S1"
                                            {{ $data->pendidikan->jenjang == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2"
                                            {{ $data->pendidikan->jenjang == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3"
                                            {{ $data->pendidikan->jenjang == 'S3' ? 'selected' : '' }}>S3</option>
                                        <option value="Lainnya"
                                            {{ $data->pendidikan->jenjang == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                        </option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="validationTooltip05"
                                        name="institusi" placeholder="Nama Institusi" required
                                        value="{{ $data->pendidikan->institusi }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="validationTooltip05"
                                        name="jurusan" placeholder="Jurusan" required
                                        value="{{ $data->pendidikan->jurusan }}">
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
                                        name="tahun_lulus" placeholder="Tahun" required
                                        value="{{ $data->pendidikan->tahun_lulus }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="validationTooltip05"
                                        name="ipk" placeholder="IPK" required
                                        value="{{ $data->pendidikan->ipk }}">
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
                                        name="nama_kursus" placeholder="Nama Kursus" required
                                        value="{{ $data->pelatihan->nama_kursus }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="validationTooltip05"
                                        name="tahuns" placeholder="Tahun" required
                                        value="{{ $data->pelatihan->tahun }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-3 m-auto">
                                    <label for="validationTooltip05" class="mr-3">Sertifikat</label>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="sertifikat" id="radio2" value="1"
                                            {{ $data->sertifikat == 1 ? 'checked' : '' }}>
                                        <label for="radio2">Ya</label>
                                    </div>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="sertifikat" id="radio2" value="0"
                                            {{ $data->sertifikat == 0 ? 'checked' : '' }}>
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
                                        name="perusahaan" placeholder="Nama Perusahaan" required
                                        value="{{ $data->pekerjaan->perusahaan }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control" id="validationTooltip05"
                                        name="posisi" placeholder="Posisi Terakhir" required
                                        value="{{ $data->pekerjaan->posisi }}">
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
                                        name="salary" placeholder="Pendapatan Terakhir" required
                                        value="{{ $data->pekerjaan->salary }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" id="validationTooltip05"
                                        name="tahun" placeholder="Tahun Bekerja" required
                                        value="{{ $data->pekerjaan->tahun }}">
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="skills">{{ $data->skills }}</textarea>
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
                                        <input type="radio" name="placement" id="radio2" value="1"
                                            {{ $data->placement == 1 ? 'checked' : '' }}>
                                        <label for="radio2">Ya</label>
                                    </div>
                                    <div class="radio d-inline-block mr-2">
                                        <input type="radio" name="placement" id="radio2" value="0"
                                            {{ $data->placement == 0 ? 'checked' : '' }}>
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
                                        name="salary" required value="{{ $data->salary }}">
                                    <div class="invalid-tooltip">
                                        Please Add the Data!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
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
