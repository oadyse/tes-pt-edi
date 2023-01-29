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
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">2.</td>
                                            <td width="40%">Nama</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">3.</td>
                                            <td width="40%">No. KTP</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">4.</td>
                                            <td width="40%">Tempat, Tanggal Lahir</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">5.</td>
                                            <td width="40%">Jenis Kelamin</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">6.</td>
                                            <td width="40%">Agama</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">7.</td>
                                            <td width="40%">Golongan Darah</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">8.</td>
                                            <td width="40%">Status</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">9.</td>
                                            <td width="40%">Alamat KTP</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">10.</td>
                                            <td width="40%">Alamat Tinggal</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">11.</td>
                                            <td width="40%">Email</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">12.</td>
                                            <td width="40%">No. Telp</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">13.</td>
                                            <td width="40%">Orang terdekat yang dapat dihubungi</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">14.</td>
                                            <td width="40%">Pendidikan Terakhir</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">15.</td>
                                            <td width="40%">Riwayat Pelatihan</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">16.</td>
                                            <td width="40%">Riwayat Pekerjaan</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">17.</td>
                                            <td width="40%">Skill</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">18.</td>
                                            <td width="40%">Bersedia ditempatkan di seluruh perusahaan</td>
                                            <td><b>a</b></td>
                                        </tr>
                                        <tr>
                                            <td width="2%">19.</td>
                                            <td width="40%">Penghasilan yang diharapkan</td>
                                            <td><b>a</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
