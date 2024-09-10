@extends('dashboard.layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Data</a></li>
    <li class="breadcrumb-item"><a href="#">Koperasi</a></li>
    <li class="breadcrumb-item active" aria-current="page">Anggota</li>
@endsection

@section('content')
    <div class="row">
        <p class="mt-2">
            <a href="/tambah_anggota" class="btn btn-primary"> Tambah Anggota </a>
        </p>
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NO Anggota</th>
                            <th>NIS</th>
                            <th>Nama Anggota</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($primkop_anggota as $data)
                            <tr>
                                <td>#{{ $data->id }}</td>
                                <td>{{ $data->no_anggota }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->nomor_hp }}</td>
                                <td>{{ $data->email ?? '-' }}</td>
                                <td>{{ $data->approval ? 'Lengkap' : 'Tidak Lengkap'}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning"
                                        onclick="modalBtn({{ json_encode($data) }})" data-bs-toggle="modal"
                                        data-bs-target="#modalInkop" {{ $data->approval ? "" : "disabled" }}>Detail </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalInkop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Detail Anggota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Nama Anggota:</h3>
                                <p class="text-white" id="nama_anggota"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">No Anggota:</h3>
                                <p class="text-white" id="no_anggota"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">NIK:</h3>
                                <p class="text-white" id="nik"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">NIS:</h3>
                                <p class="text-white" id="nis"</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Tempat Lahir:</h3>
                                <p class="text-white" id="tempat_lahir"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Tanggal Lahir:</h3>
                                <p class="text-white" id="tanggal_lahir"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Email:</h3>
                                <p class="text-white" id="email"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Nomor HP:</h3>
                                <p class="text-white" id="nomor_hp"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Jenis Kelamin:</h3>
                                <p class="text-white" id="jenis_kelamin"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Alamat:</h3>
                                <p class="text-white" id="alamat"></p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Provinsi:</h3>
                                <p class="text-white" id="provinsi"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Kabupaten/Kota:</h3>
                                <p class="text-white" id="kota"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">

                                <h3 class="text-white fs-5 mt-3">Kecamatan:</h3>
                                <p class="text-white" id="kecamatan"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Kelurahan:</h3>
                                <p class="text-white" id="kelurahan"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Kode Pos:</h3>
                                <p class="text-white" id="kode_pos"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Status Pernikahan:</h3>
                                <p class="text-white" id="status_pernikahan"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Pekerjaan:</h3>
                                <p class="text-white fs-6" id="pekerjaan"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Kewarganegaraan:</h3>
                                <p class="text-white fs-6" id="kewarganegaraan"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Pendidikan Terakhir:</h3>
                                <p class="text-white fs-6" id="pendidikan_terakhir"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Agama:</h3>
                                <p class="text-white fs-6" id="agama"></p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Nama Pasangan:</h3>
                                <p class="text-white fs-6" id="nama_pasangan"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Usia Pasangan:</h3>
                                <p class="text-white fs-6" id="usia_pasangan"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Pekerjaan Pasangan:</h3>
                                <p class="text-white fs-6" id="pekerjaan_pasangan"></p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-white fs-5 mt-3">Pendidikan Pasangan:</h3>
                                <p class="text-white fs-6" id="pendidikan_pasangan"></p>
                            </div>
                        </div>
                        {{-- <h3 class="text-white fs-5 mt-3">Provinsi:</h3>
                        <p class="text-white fs-6" id="provinsi"></p>
                        <h3 class="text-white fs-5 mt-3">Kota/Kabupaten:</h3>
                        <p class="text-white fs-6" id="kota"></p>
                        <h3 class="text-white fs-5 mt-3">Kecamatan:</h3>
                        <p class="text-white fs-6" id="kecamatan"></p>
                        <h3 class="text-white fs-5 mt-3">Kelurahan:</h3> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('js')
    <script>
        function modalBtn(data) {
            console.log(data)
            document.getElementById('nama_anggota').innerText = data.nama_lengkap
            document.getElementById('nik').innerText = data.nik
            document.getElementById('email').innerText = data.email
            document.getElementById('tanggal_lahir').innerText = data.tanggal_lahir
            document.getElementById('alamat').innerText = data.alamat
            document.getElementById('tempat_lahir').innerText = data.tempat_lahir
            document.getElementById('jenis_kelamin').innerText = data.jenis_kelamin
            document.getElementById('provinsi').innerText = data.id_provinsi
            document.getElementById('kota').innerText = data.id_kota
            document.getElementById('kecamatan').innerText = data.id_kecamatan
            document.getElementById('kelurahan').innerText = data.id_kelurahan
            document.getElementById('pekerjaan').innerText = data.pekerjaan
            document.getElementById('nis').innerText = data.nis
            document.getElementById('no_anggota').innerText = data.no_anggota
            document.getElementById('nomor_hp').innerText = data.nomor_hp
            document.getElementById('pendidikan_terakhir').innerText = data.pendidikan_terakhir
            document.getElementById('kewarganegaraan').innerText = data.kewarganegaraan
            document.getElementById('agama').innerText = data.agama
            document.getElementById('status_pernikahan').innerText = data.status_pernikahan
            document.getElementById('pekerjaan').innerText = data.pekerjaan
            document.getElementById('nama_pasangan').innerText = data.nama_pasangan
            document.getElementById('usia_pasangan').innerText = data.usia_pasangan
            document.getElementById('pekerjaan_pasangan').innerText = data.pekerjaan_pasangan
            document.getElementById('pendidikan_pasangan').innerText = data.pendidikan_pasangan


        }

    </script>
@endpush
