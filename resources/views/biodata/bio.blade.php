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
                            <div class="row mx-2 d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Biodata User</h4>
                                </div>
                                <?php 
                                if ($exist) {
                                    $id = $data->id;
                                ?>
                                <div>
                                    </a><a href="{{ route('edit-biodata', base64_encode($id)) }}"
                                        class="btn btn-warning rounded-pill mx-2">
                                        Edit Data
                                    </a>
                                </div>
                            </div>
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
                            <div class="table-responsive">
                                <table id="datatable-1" class="table data-table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td width="2%">1.</td>
                                            <td width="40%">Posisi yang Dilamar</td>
                                            <td><b>{{ $data->posisi }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">2.</td>
                                            <td width="40%">Nama</td>
                                            <td><b>{{ $data->nama }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">3.</td>
                                            <td width="40%">No. KTP</td>
                                            <td><b>{{ $data->no_ktp }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">4.</td>
                                            <td width="40%">Tempat, Tanggal Lahir</td>
                                            <td><b>{{ $data->tmp_lahir }},
                                                    {{ date('d M Y', strtotime($data->tgl_lahir)) }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">5.</td>
                                            <td width="40%">Jenis Kelamin</td>
                                            <td><b>{{ $data->jk }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">6.</td>
                                            <td width="40%">Agama</td>
                                            <td><b>{{ $data->agama }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">7.</td>
                                            <td width="40%">Golongan Darah</td>
                                            <td><b>{{ $data->gol_darah }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">8.</td>
                                            <td width="40%">Status</td>
                                            <td><b>{{ $data->status }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">9.</td>
                                            <td width="40%">Alamat KTP</td>
                                            <td><b>{{ $data->alamat_ktp }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">10.</td>
                                            <td width="40%">Alamat Tinggal</td>
                                            <td><b>{{ $data->alamat_domisili }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">11.</td>
                                            <td width="40%">Email</td>
                                            <td><b>{{ $data->email }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">12.</td>
                                            <td width="40%">No. Telp</td>
                                            <td><b>{{ $data->no_hp }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">13.</td>
                                            <td width="40%">Orang terdekat yang dapat dihubungi</td>
                                            <td><b>{{ $data->close_person }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">14.</td>
                                            <td width="40%">Pendidikan Terakhir</td>
                                            <td><b>
                                                    {{ $data->pendidikan->jenjang }}
                                                    {{ $data->pendidikan->jurusan }} di
                                                    {{ $data->pendidikan->institusi }}
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="2%">15.</td>
                                            <td width="40%">Riwayat Pelatihan</td>
                                            <td><b>{{ $data->pelatihan->nama_kursus }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">16.</td>
                                            <td width="40%">Riwayat Pekerjaan</td>
                                            <td><b>{{ $data->pekerjaan->posisi }} di
                                                    {{ $data->pekerjaan->perusahaan }}
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="2%">17.</td>
                                            <td width="40%">Skill</td>
                                            <td><b>{{ $data->skills }}</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">18.</td>
                                            <td width="40%">Bersedia ditempatkan di seluruh perusahaan</td>
                                            @if ($data->placement == 0)
                                                <td><b>{{ 'Tidak' }}</b></td>
                                            @else
                                                <td><b>{{ 'Ya' }}</b></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td width="2%">19.</td>
                                            <td width="40%">Penghasilan yang diharapkan</td>
                                            <td><b>{{ 'Rp ' . number_format($data->salary, 0, ',', '.') }}</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php 
                        } else {
                        ?>
                        <div>
                            <a href="{{ route('form-biodata') }}" class="btn btn-primary rounded-pill">
                                Entry Data
                            </a>
                        </div>
                    </div>
                    <div class="card-body mt-3 text-center">
                        <p>Data Kosong. Silahkan lengkapi data!</p>
                    </div>
                    <?php
                        }
                        ?>
                </div>
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

<!-- Add alert -->
@if (session('successAdd'))
    <script>
        swal({
            icon: 'success',
            title: "Add Success!",
            text: "{{ session('successAdd') }}",
            button: false,
            timer: 3500
        })
    </script>
@elseif (session('successUpdate'))
    <script>
        swal({
            icon: "success",
            title: "Update Success!",
            text: "{{ session('successUpdate') }}",
            button: false,
            timer: 3500
        })
    </script>
@elseif (session('delete'))
    <script>
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover it!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("{{ session('delete') }}", {
                        icon: "success",
                        button: false,
                        timer: 3500
                    });
                } else {
                    swal("Your data is safe!");
                }
            });
    </script>
@endif
<!-- /Alert -->

</body>

</html>
