<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Registrasi Anggota - RKI</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-fav-icon.png') }}" type="image/x-icon" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="/assets/dashboard/layouts/modern-light-menu/loader.js"></script>
    <script src="/assets/js/function.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/assets/dashboard/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/layouts/modern-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="/assets/dashboard/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="/assets/dashboard/src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="/assets/dashboard/src/plugins/src/sweetalerts2/sweetalerts2.css">

    <link href="/assets/dashboard/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/dashboard/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/light/elements/alert.css">

    <link href="/assets/dashboard/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/dashboard/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/light/forms/switches.css">
    <link href="/assets/dashboard/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="/assets/dashboard/src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />



    <link href="/assets/dashboard/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/dark/elements/alert.css">
    <!-- <script src="/assets/js/common_scripts.min.js"></script> -->

    <link href="/assets/dashboard/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="/assets/dashboard/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/dashboard/src/assets/css/dark/forms/switches.css">
    <link href="/assets/dashboard/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="/assets/dashboard/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />


    <!--  END CUSTOM STYLE FILE  -->
</head>

<body class=" layout-boxed">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->

    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <ul class="nav nav-pills" id="animateLine" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active disabled" id="animated-underline-home-tab"
                                        data-bs-toggle="tab" href="#animated-underline-home" role="tab"
                                        aria-controls="animated-underline-home" aria-selected="true">
                                        <i data-feather="user" class="mx-2"></i>Data Diri Anggota
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-profile-tab"
                                        data-bs-toggle="tab" href="#animated-underline-profile" role="tab"
                                        aria-controls="animated-underline-profile" aria-selected="false"
                                        tabindex="-1"><i data-feather="home" class="mx-2"></i>Data Alamat</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-pengurus-tab" data-bs-toggle="tab"
                                        href="#animated-pengurus" role="tab" aria-controls="animated-pengurus"
                                        aria-selected="false" tabindex="-1"><i data-feather="users" class="mx-2"></i>Data Keluarga </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-pengawas-tab" data-bs-toggle="tab"
                                        href="#animated-pengawas" role="tab" aria-controls="animated-pengawas"
                                        aria-selected="false" tabindex="-1"><i data-feather="book-open" class="mx-2"></i>Riwayat Pendidikan Terakhir</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-preferences-tab"
                                        data-bs-toggle="tab" href="#animated-underline-preferences" role="tab"
                                        aria-controls="animated-underline-preferences" aria-selected="false"
                                        tabindex="-1"><i data-feather="briefcase" class="mx-2"></i> Riwayat Pekerjaan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-contact-tab"
                                        data-bs-toggle="tab" href="#animated-underline-contact" role="tab"
                                        aria-controls="animated-underline-contact" aria-selected="false"
                                        tabindex="-1"><i data-feather="users" class="mx-2"></i>  Data Pasangan </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                            aria-labelledby="animated-underline-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="otp">Masukan OTP</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="otp" placeholder="Kode OTP"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mt-1">
                                                                        <div class="form-group text-start">
                                                                            <button onclick="confirm()" type="button"
                                                                                id="confirm-btn"
                                                                                class="btn btn-secondary">Konfirmasi</button>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-5" id="form-anggota"
                                                            hidden>
                                                            <h6 class="mt-3">Data Lengkap</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="selfie">Foto Pribadi</label>
                                                                            <img src="/assets/images/selfie.JPG"
                                                                                alt="selfie" width="150"
                                                                                height="150"
                                                                                class="d-block mx-auto mb-3"
                                                                                style="border-radius: 10%" />
                                                                            <input type="file" name="selfie"
                                                                                id="selfie"
                                                                                class="form-control form-control px-4 mb-3"
                                                                                onchange="convertBase64selfie()"
                                                                                style=" height: auto !important; padding-top: 15px !important; padding-bottom: 15px !important;"
                                                                                accept="image/jpeg, image/png, image/jpg"
                                                                                required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="ktp">Foto KTP</label>
                                                                            <input type="file" name="ktp"
                                                                                id="ktp"
                                                                                class="form-control px-4"
                                                                                style="height: auto !important; padding-top: 15px !important; padding-bottom: 15px !important;"
                                                                                onchange="convertBase64ktp()"
                                                                                accept="image/jpeg, image/jpg, image/png"
                                                                                required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_anggota">No Anggota</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_anggota"
                                                                                placeholder="Masukan No Anggota"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nik">NIK</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="nik"
                                                                                placeholder="Masukan NIK">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nama_lengkap">Nama
                                                                                Lengkap</label>
                                                                            <input type="nama_lengkap"
                                                                                class="form-control mb-3"
                                                                                id="nama_lengkap"
                                                                                placeholder="Masukan Nama Lengkap">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email"
                                                                                class="form-control mb-3"
                                                                                id="email"
                                                                                placeholder="Masukan Nama Lengkap">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tempat_lahir">Tempat
                                                                                Lahir</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="tempat_lahir"
                                                                                placeholder="Masukan Tempat Lahir">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_lahir">Tanggal
                                                                                Lahir</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="tanggal_lahir"
                                                                                placeholder="Tanggal Lahir">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="jenis_kelamin">Jenis
                                                                                Kelamin</label>
                                                                            <div
                                                                                class="d-flex justify-content-start align-items-center gap-2">
                                                                                <input type="radio"
                                                                                    name="jenis_kelamin"
                                                                                    class="form-check"
                                                                                    value="laki-laki" checked />
                                                                                Laki Laki
                                                                            </div>

                                                                            <div
                                                                                class="d-flex justify-content-start align-items-center gap-2">
                                                                                <input type="radio"
                                                                                    name="jenis_kelamin"
                                                                                    class="form-check"
                                                                                    value="perempuan" checked />
                                                                                Perempuan
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nomor_hp">Nomor HP</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="nomor_hp"
                                                                                placeholder="Masukan No HP"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="agama">Agama</label>
                                                                            <select name="agama" id="agama"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden>Pilih
                                                                                    Agama</option>
                                                                                <option value="Islam">Islam</option>
                                                                                <option value="Protestan">Protestan
                                                                                </option>
                                                                                <option value="Katolik">Katolik
                                                                                </option>
                                                                                <option value="Hindu">Hindu</option>
                                                                                <option value="Buddha">Buddha</option>
                                                                                <option value="Konghucu">Konghucu
                                                                                </option>
                                                                                <option value="Lainnya">Lainnya
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="pendidikan_terakhir">Pendidikan
                                                                                Terakhir</label>
                                                                            <select name="pendidikan_terakhir"
                                                                                id="pendidikan_terakhir"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden>Pilih
                                                                                    Jenjang Pendidikan</option>
                                                                                <option value="SD">SD/Sederajat
                                                                                </option>
                                                                                <option value="SMP">SMP/Sedejarat
                                                                                </option>
                                                                                <option value="SMA">SMA/Sederajat
                                                                                </option>
                                                                                <option value="Diploma">Diploma
                                                                                </option>
                                                                                <option value="S1">S1
                                                                                </option>
                                                                                <option value="S2">S2
                                                                                </option>
                                                                                <option value="S3">S3
                                                                                </option>
                                                                                <option value="Tidak Ada">Tidak Ada
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="status_pernikahan">Status
                                                                                Perkawinan</label>
                                                                            <select name="status_pernikahan"
                                                                                id="status_pernikahan"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden>Pilih
                                                                                    Status Perkawinan</option>
                                                                                <option value="Belum Kawin">Belum Kawin
                                                                                </option>
                                                                                <option value="Sudah Kawin">Sudah Kawin
                                                                                </option>
                                                                                <option value="Cerai Mati">Cerai Mati
                                                                                </option>
                                                                                <option value="Cerai Hidup">Cerai Hidup
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="pekerjaan">Pekerjaan</label>
                                                                            <select type="text"
                                                                                class="form-control mb-3"
                                                                                id="pekerjaan"
                                                                                placeholder="Masukan Pekerjaan Terkini"
                                                                                value="">
                                                                                <option value="00" hidden>Pilih
                                                                                    Pekerjaan</option>
                                                                                <option value="Wiraswasta/Wirausaha">
                                                                                    Wiraswasta/Wirausaha</option>
                                                                                <option value="PNS/TNI/Polri">PNS/TNI/Polri
                                                                                </option>
                                                                                <option value="Pegawai Swasta">Pegawai Swasta
                                                                                </option>
                                                                                <option value="Tidak Bekerja">Tidak Bekerja
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="kewarganegaraan">Kewarganegaraan</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="kewarganegaraan"
                                                                                placeholder="Masukan Kewarganegaraan"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="nextBtn()"
                                                                            class="btn btn-secondary">Next</button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel"
                            aria-labelledby="animated-underline-profile-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <h6>Data Alamat</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label for="alamat">Alamat
                                                                            Lengkap</label>
                                                                        <textarea type="text" class="form-control mb-3" style="height: 120px" onkeyup="getVals(this, 'alamat');"
                                                                            id="alamat" placeholder="Masukan Alamat Koperasi" value=""></textarea>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="singkatan_koperasi">Provinsi</label>
                                                                            <select onchange="getCity(this.value)"
                                                                                id="provinsi"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden selected>
                                                                                    Pilih Provinsi</option>
                                                                            </select>
                                                                            <div id="provinsi-error"
                                                                                class="text-danger mt-1 hidden">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="kota">Kabupaten/Kota</label>
                                                                            <select onchange="getDistrict(this.value)"
                                                                                id="kota"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden selected>
                                                                                    Pilih Kabuptaen/Kota</option>
                                                                            </select>
                                                                            <div id="kota-error"
                                                                                class="text-danger mt-1 hidden">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="kecamatan">Kecamatan</label>
                                                                            <select
                                                                                onchange="getSubdistrict(this.value)"
                                                                                id="kecamatan"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden selected>
                                                                                    Pilih Kecamatan</option>
                                                                            </select>
                                                                            <div id="kecamatan-error"
                                                                                class="text-danger mt-1 hidden">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="kelurahan">Kelurahan</label>
                                                                            <select id="kelurahan"
                                                                                class="form-control mb-3">
                                                                                <option value="00" hidden selected>
                                                                                    Pilih Kelurahan/Desa</option>
                                                                            </select>
                                                                            <div id="kelurahan-error"
                                                                                class="text-danger mt-1 hidden">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kode_pos">Kode Pos</label>
                                                                        <input type="text" name="kode_pos"
                                                                            id="kode_pos" class="form-control mb-3"
                                                                            placeholder="Masukan Kode Pos" />
                                                                    </div>
                                                                    <div
                                                                        class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()"
                                                                            class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()"
                                                                            class="btn btn-secondary">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="animated-pengawas" role="tabpanel"
                            aria-labelledby="animated-pengawas-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <h6>Data Pendidikan Terakhir</h6>
                                                                <div class="row">
                                                                    <div id="pendidikanSection1"
                                                                        class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2"
                                                                        style="display: none;">
                                                                        <div class="form">
                                                                            <h6 class="text-info">*)Anda bisa melewati
                                                                                bagian ini</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div id="pendidikanSection2"
                                                                        class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2"
                                                                        style="display: block;">
                                                                        <div class="form">
                                                                            <button type="button"
                                                                                onclick="tambahPendidikanBtn()"
                                                                                class="btn btn-success mb-3">Tambah
                                                                                Data</button>
                                                                            <div>
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th scope="col">#
                                                                                            </th>
                                                                                            <th scope="col">Nama
                                                                                                Institusi</th>
                                                                                            <th scope="col">
                                                                                                Jurusan
                                                                                            </th>
                                                                                            <th scope="col">
                                                                                                Tahun Lulus</th>
                                                                                            <th scope="col">Aksi
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="pendidikanList">

                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()"
                                                                            class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()"
                                                                            class="btn btn-secondary">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="animated-pengurus" role="tabpanel"
                            aria-labelledby="animated-pengurus-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <h6>Data Keluarga</h6>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2">
                                                                        <div class="form">
                                                                            <button type="button"
                                                                                onclick="tambahAnggotaKeluargaBtn()"
                                                                                class="btn btn-success mb-3">Tambah
                                                                                Data</button>
                                                                            <div>
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th scope="col">#
                                                                                            </th>
                                                                                            <th scope="col">Nama
                                                                                                Keluarga</th>
                                                                                            <th scope="col">
                                                                                                Pendidikan
                                                                                            </th>
                                                                                            <th scope="col">
                                                                                                Status</th>
                                                                                            <th scope="col">Aksi
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="keluargaList">

                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()"
                                                                            class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()"
                                                                            class="btn btn-secondary">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel"
                            aria-labelledby="animated-underline-preferences-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <h6>Data Riwayat Pekerjaan</h6>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2"
                                                                        style="display: none;" id="questionContent">
                                                                        <div class="form">
                                                                            <label>Apakah Anda sudah pernah bekerja /
                                                                                berwirausaha?</label>
                                                                            <div
                                                                                class="d-flex justify-content-start align-items-center gap-2">
                                                                                <input type="checkbox"
                                                                                    name="pekerjaan_choice"
                                                                                    class="form-check"
                                                                                    value="laki-laki"
                                                                                    id="checkboxYa" />
                                                                                Ya
                                                                            </div>

                                                                            <div
                                                                                class="d-flex justify-content-start align-items-center gap-2">
                                                                                <input type="checkbox"
                                                                                    name="pekerjaan_choice"
                                                                                    class="form-check"
                                                                                    value="perempuan"
                                                                                    id="checkboxTidak" />
                                                                                Tidak
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="pekerjaanContent" style="display: block;"
                                                                        class="col-lg-12 col-md-8 mt-md-0 mt-5 mt-5">
                                                                        <div class="form">
                                                                            <button type="button"
                                                                                onclick="tambahPekerjaanBtn()"
                                                                                class="btn btn-success mb-3 mt-3">Tambah
                                                                                Data</button>
                                                                            <div>
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th scope="col">#
                                                                                            </th>
                                                                                            <th scope="col">Nama
                                                                                                Perusahaan</th>
                                                                                            <th scope="col">
                                                                                                Alamat Perusahaan
                                                                                            </th>
                                                                                            <th scope="col">
                                                                                                Periode Kerja Awal
                                                                                            </th>
                                                                                            <th scope="col">
                                                                                                Periode Kerja Akhir
                                                                                            </th>
                                                                                            <th scope="col">Gaji
                                                                                                Terakhir</th>
                                                                                            <th scope="col">Aksi
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="pekerjaanList">

                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                        <button type="button" onclick="previousBtn()"
                                                                            class="btn btn-secondary">Previous</button>
                                                                        <button type="button" onclick="nextBtn()"
                                                                            class="btn btn-secondary">Next</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel"
                            aria-labelledby="animated-underline-contact-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <h6>Data Pasangan</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nama_pasangan">Nama
                                                                                Suami/Istri</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="nama_pasangan"
                                                                                placeholder="Masukan Nama Suami / Istri">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="usia_pasangan">Usia
                                                                                Suami/Istri</label>
                                                                            <input type="number"
                                                                                class="form-control mb-3"
                                                                                id="usia_pasangan"
                                                                                placeholder="Masukan Usia">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="pekerjaan_pasangan">Pekerjaan
                                                                                Suami/Istri</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="pekerjaan_pasangan"
                                                                                placeholder="Masukan Pekerjaan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="pendidikan_pasangan">Pendidikan
                                                                                Suami/Istri</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="pendidikan_pasangan"
                                                                                placeholder="Tanggal Lahir">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-12 mt-1 d-flex justify-content-center gap-4">
                                                                    <button type="button" onclick="previousBtn()"
                                                                        class="btn btn-secondary">Previous</button>
                                                                    <button type="button" onclick="saveData()"
                                                                        class="btn btn-secondary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                            href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>

    <script>
        let nis;
        let baseStringSelfie;
        let baseStringKtp;
        let id_anggota;
        let id_koperasi;
        let anggotaKeluarga = [];
        let pendidikanData = [];
        let pekerjaanData = [];
        const pekerjaanChoice = document.getElementById("pekerjaan");
        const questionContent = document.getElementById("questionContent");
        const checkboxYa = document.getElementById('checkboxYa');
        const checkboxTidak = document.getElementById('checkboxTidak');
        const pekerjaanContent = document.getElementById('pekerjaanContent');
        const pendidikanTerakhir = document.getElementById('pendidikan_terakhir');
        const pendidikanSection1 = document.getElementById("pendidikanSection1")
        const pendidikanSection2 = document.getElementById("pendidikanSection2")


        window.addEventListener("load", () => {
            nis = '{{ $nis }}';
            getProvince();
        });
        pendidikanTerakhir.addEventListener('change', function() {
            console.log(this.value)
            if (this.value == "Tidak Ada") {
                pendidikanSection1.style.display = 'block'
                pendidikanSection2.style.display = 'none';
            } else {
                pendidikanSection1.style.display = 'none';
                pendidikanSection2.style.display = 'block';
            }
        });
        pekerjaanChoice.addEventListener('change', function() {
            console.log(this.value)
            if (this.value == "Tidak Bekerja") {
                questionContent.style.display = 'block'
                pekerjaanContent.style.display = 'none';
            } else {
                questionContent.style.display = 'none';
                pekerjaanContent.style.display = 'block';
            }
        });
        checkboxYa.addEventListener('change', function() {
            if (this.checked) {
                checkboxTidak.checked = false;
                pekerjaanContent.style.display = 'block';
            } else {
                pekerjaanContent.style.display = 'none';
            }
        });

        checkboxTidak.addEventListener('change', function() {
            if (this.checked) {
                checkboxYa.checked = false;
                pekerjaanContent.style.display = 'none';
            }
        });

        function confirm() {
            const otp = document.getElementById('otp').value
            fetch(`/api/anggota/verifikasi-otp/${otp}/${nis}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.response_code !== '00') {

                        Swal.fire({
                            title: "Perhatian!",
                            text: data.response_message,
                            icon: "info",
                            confirmButtonText: "OK"
                        });
                    } else {
                        document.getElementById('nama_lengkap').value = data.response_message.nama_lengkap;
                        document.getElementById('email').value = data.response_message.email;
                        document.getElementById('no_anggota').value = data.response_message.no_anggota;
                        document.getElementById('nomor_hp').value = data.response_message.nomor_hp;
                        // Enable next step
                        document.getElementById('form-anggota').hidden = false;

                        // document.getElementById('nis').disabled = true;
                        document.getElementById('confirm-btn').disabled = true;
                        document.getElementById('otp').disabled = true;
                        id_anggota = data.response_message.id
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function nextBtn() {
            // Mendapatkan tab yang aktif saat ini
            const activeTab = document.querySelector('#animateLine .nav-link.active');

            // Mendapatkan tab berikutnya
            const nextTab = activeTab.parentElement.nextElementSibling?.querySelector('.nav-link');

            if (nextTab) {
                // Mengaktifkan tab berikutnya
                new bootstrap.Tab(nextTab).show();
            }
        }

        function previousBtn() {
            // Mendapatkan tab yang aktif saat ini
            const activeTab = document.querySelector('#animateLine .nav-link.active');

            // Mendapatkan tab sebelumnya
            const previousTab = activeTab.parentElement.previousElementSibling?.querySelector('.nav-link');

            if (previousTab) {
                // Mengaktifkan tab sebelumnya
                new bootstrap.Tab(previousTab).show();
            }
        }

        function renderAnggotaKeluarga() {
            const anggotaList = document.getElementById('keluargaList');
            keluargaList.innerHTML = ''; // Mengosongkan isi elemen sebelum dirender ulang

            // Render list_anggota
            anggotaKeluarga.forEach((anggota, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${anggota.nama_keluarga}</td>
                    <td>${anggota.status}</td>
                    <td>${anggota.pendidikan}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editAnggotaKeluarga(${index})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteAnggotaKeluarga(${index})">Delete</button>
                    </td>
                `;
                keluargaList.appendChild(row);
            });


        }

        function tambahAnggotaKeluargaBtn() {
            Swal.fire({
                title: "Tambah Anggota Keluarga",
                html: `
            <input id="swal-input1" class="swal2-input" placeholder="Masukan Nama Anggota Keluarga">
            <select id="swal-input2" class="swal2-select" placeholder="Masukan Status Anggota Keluarga">
                <option value="00" hidden>Masukan status anggota</option>
                <option value="ayah">Ayah</option>
                <option value="ibu">Ibu</option>
                <option value="anak">Anak</option>
            </select>
           <select id="swal-input3" class="swal2-select" placeholder="Masukan Pendidikan Terakhir">
                <option value="00" hidden>Masukan pendidikan terakhir anggota</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="Diploma">Diploma</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
             <input id="swal-input4" class="swal2-input" placeholder="Masukan Tempat lahir">
            <input id="swal-input5" type="date" class="swal2-input" placeholder="Masukan tanggal lahir">
        `,
                showCancelButton: true,
                confirmButtonText: "Tambah",
                preConfirm: () => {
                    const nama_keluarga = document.getElementById('swal-input1').value;
                    const status = document.getElementById('swal-input2').value;
                    const pendidikan = document.getElementById('swal-input3').value;
                    const tempat_lahir = document.getElementById('swal-input4').value;
                    const tanggal_lahir = document.getElementById('swal-input5').value;

                    if (!nama_keluarga || !status || !pendidikan || !tempat_lahir || !tanggal_lahir) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    } = result.value;

                    anggotaKeluarga.push({
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    });

                    renderAnggotaKeluarga();
                    console.log(anggotaKeluarga)
                }
            });
        }

        function editAnggotaKeluarga(index) {
            const anggota = anggotaKeluarga[index];
            Swal.fire({
                title: "Edit Anggota Keluarga",
                html: `
           <input id="swal-input1" class="swal2-input" value="${anggota.nama_keluarga}" placeholder="Masukan nama anggota keluarga">
            <select id="swal-input2" class="swal2-select" placeholder="Masukan Status Anggota Keluarga">
                <option value="Ayah" ${anggota.status=='ayah'? 'selected': ''}>Ayah</option>
                <option value="Ibu" ${anggota.status=='ibu'? 'selected': ''}>Ibu</option>
                <option value="Anak" ${anggota.status=='anak'? 'selected': ''}>Anak</option>
            </select>
            <select id="swal-input3" class="swal2-select" placeholder="Masukan Pendidikan Terakhir">
                <option value="SD" ${anggota.pendidikan=='SD'? 'selected': ''}>SD</option>
                <option value="SMP" ${anggota.pendidikan=='SMP'? 'selected': ''}>SMP</option>
                <option value="SMA" ${anggota.pendidikan=='SMA'? 'selected': ''}>SMA</option>
                <option value="Diploma" ${anggota.pendidikan=='Diploma'? 'selected': ''}>Diploma</option>
                <option value="S1" ${anggota.pendidikan=='S1'? 'selected': ''}>S1</option>
                <option value="S2" ${anggota.pendidikan=='S2'? 'selected': ''}>S2</option>
                <option value="S3 ${anggota.pendidikan=='S3'? 'selected': ''}">S3</option>
            </select>
            <input id="swal-input4" class="swal2-input" value="${anggota.tempat_lahir}" placeholder="masukan tempat lahir">
            <input id="swal-input5" type="date" class="swal2-input" value="${anggota.tanggal_lahir}" placeholder="Masukan tanggal lahir">

        `,
                showCancelButton: true,
                confirmButtonText: "Update",
                preConfirm: () => {
                    const nama_keluarga = document.getElementById('swal-input1').value;
                    const status = document.getElementById('swal-input2').value;
                    const pendidikan = document.getElementById('swal-input3').value;
                    const tempat_lahir = document.getElementById('swal-input4').value;
                    const tanggal_lahir = document.getElementById('swal-input5').value;

                    if (!nama_keluarga || !status || !pendidikan || !tempat_lahir || !tanggal_lahir) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    } = result.value;

                    anggotaKeluarga[index] = {
                        nama_keluarga,
                        status,
                        pendidikan,
                        tempat_lahir,
                        tanggal_lahir,
                    };
                    renderAnggotaKeluarga();
                    Swal.fire('Updated!', 'Data keluarga telah diperbarui.', 'success');
                }
            });
        }

        function deleteAnggotaKeluarga(index) {
            anggotaKeluarga.splice(index, 1);
            renderAnggotaKeluarga();
        }

        function renderPekerjaan() {
            const pekerjaanList = document.getElementById('pekerjaanList');
            pekerjaanList.innerHTML = '';
            pekerjaanData.forEach((pekerjaan, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${pekerjaan.nama_perusahaan}</td>
                    <td>${pekerjaan.alamat_perusahaan}</td>
                    <td>${pekerjaan.periode_kerja_awal}</td>
                    <td>${pekerjaan.periode_kerja_akhir}</td>
                    <td>${pekerjaan.gaji_terakhir}</td>

                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editPekerjaan(${index})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deletePekerjaan(${index})">Delete</button>
                    </td>
                `;
                pekerjaanList.appendChild(row);
            });

        }

        function tambahPekerjaanBtn() {
            Swal.fire({
                title: 'Tambah Pekerjaan',
                html: `
                    <input id="swal-input1" class="swal2-input" placeholder="Masukan Nama Perusahaan">
                    <input id="swal-input2" class="swal2-input mb-1" placeholder="Masukan alamat_perusahaan">
                    <label>Periode Waktu Kerja</label>
                    <div class="d-flex flex-row gap-1">
                        <div class="d-flex flex-column">
                            <label>Periode Awal</label>
                            <input id="swal-input3" type="date" class="swal2-input" placeholder="Masukan Periode Kerja Awal">
                        </div>
                        <div class="d-flex flex-column">
                            <label>Periode Akhir</label>
                            <input id="swal-input4" type="date" class="swal2-input" placeholder="Masukan Periode Kerja Akhir">
                        </div>
                    </div>
                        <input id="swal-input5" class="swal2-input" placeholder="Masukan Gaji Terakhir">
        `,
                showCancelButton: true,
                confirmButtonText: 'Tambah',
                preConfirm: () => {
                    const nama_perusahaan = document.getElementById('swal-input1').value;
                    const alamat_perusahaan = document.getElementById('swal-input2').value;
                    const periode_kerja_awal = document.getElementById('swal-input3').value;
                    const periode_kerja_akhir = document.getElementById('swal-input4').value;
                    const gaji_terakhir = document.getElementById('swal-input5').value;

                    if (!nama_perusahaan || !alamat_perusahaan || !periode_kerja_awal || !periode_kerja_akhir ||
                        !gaji_terakhir) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir
                    } = result.value;

                    pekerjaanData.push({
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir
                    });
                    renderPekerjaan();

                    Swal.fire('Berhasil!', 'Pekerjaan berhasil ditambahkan.', 'success');
                }
            });
        }

        function editPekerjaan(index) {
            const pekerjaan = PekerjaanData[index];
            Swal.fire({
                title: 'Edit Pekerjaan',
                html: `
                        <input id="swal-input1" class="swal2-input" value="${pekerjaan.nama_perusahaan}" placeholder="Masukan Nama Perusahaan">
                        <input id="swal-input2" class="swal2-input value="${pekerjaan.alamat_perusahaan}" placeholder="Masukan Alamat Perusahaan">
                        <input id="swal-input3" type="date" class="swal2-input" value="${pekerjaan.periode_kerja_awal}" placeholder="Masukan Periode Awal">
                        <input id="swal-input4" type="date" class="swal2-input" value="${pekerjaan.periode_kerja_akhir}" placeholder="Masukan Periode Akhir">
                        <input id="swal-input5" type="date" class="swal2-input" value="${pekerjaan.gaji_terakhir}" placeholder="Masukan Gaji Terakhir">
        `,
                showCancelButton: true,
                confirmButtonText: 'Update',
                cancelButtonText: 'Batal',
                preConfirm: () => {
                    const nama_perusahaan = document.getElementById('swal-input1').value;
                    const alamat_perusahaan = document.getElementById('swal-input2').value;
                    const periode_kerja_awal = document.getElementById('swal-input3').value;
                    const periode_kerja_akhir = document.getElementById('swal-input4').value;
                    const gaji_terakhir = document.getElementById('swal-input5').value;

                    if (!nama_perusahaan || !alamat_perusahaan || !periode_kerja_awal || !periode_kerja_akhir ||
                        !gaji_terakhir) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir,
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir,
                    } = result.value;

                    pekerjaanData[index] = {
                        nama_perusahaan,
                        alamat_perusahaan,
                        periode_kerja_awal,
                        periode_kerja_akhir,
                        gaji_terakhir,
                    };

                    renderPekerjaan();
                    Swal.fire('Berhasil!', 'Data Pekerjaan berhasil diperbarui.', 'success');
                }
            });
        }

        function deletePekerjaan(index) {
            pekerjaanData.splice(index, 1);
            renderPekerjaan();
        }

        function renderPendidikan() {
            const pendidikanList = document.getElementById('pendidikanList');
            pendidikanList.innerHTML = '';
            pendidikanData.forEach((pendidikan, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${pendidikan.nama_institusi}</td>
                        <td>${pendidikan.jurusan}</td>
                        <td>${pendidikan.tahun_lulus}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editPendidikan(${index})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deletependidikan(${index})">Delete</button>
                        </td>
                    `;
                pendidikanList.appendChild(row);
            });

        }

        function tambahPendidikanBtn() {
            Swal.fire({
                title: 'Tambah Pendidikan',
                html: `
                <input id="swal-input1" class="swal2-input" placeholder="Masukan Nama Institusi">
                <input id="swal-input2" class="swal2-input" placeholder="Masukan Jurusan">
                <input id="swal-input3" type="number" class="swal2-input" placeholder="Masukan Tahun Lulus">
                `,
                showCancelButton: true,
                confirmButtonText: 'Tambah',
                preConfirm: () => {
                    const nama_institusi = document.getElementById('swal-input1').value;
                    const jurusan = document.getElementById('swal-input2').value;
                    const tahun_lulus = document.getElementById('swal-input3').value;

                    if (!nama_institusi || !jurusan || !tahun_lulus) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    } = result.value;

                    pendidikanData.push({
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    });

                    renderPendidikan();
                    Swal.fire({
                        icon: 'success',
                        title: 'Pendidikan berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

        function editPendidikan(index) {
            const pendidikan = pendidikanData[index];

            Swal.fire({
                title: 'Edit Pendidikan',
                html: `
                    <input id="swal-input1" class="swal2-input" value="${pendidikan.nama_institusi}" placeholder="Masukan Nama Institusi">
                    <input id="swal-input2" class="swal2-input value="${pendidikan.jurusan}" placeholder="Masukan Jurusan">
                    <input id="swal-input3" class="swal2-input" value="${pendidikan.tahun_lulus}" placeholder="Masukan Tahun Lulus">
                `,
                showCancelButton: true,
                confirmButtonText: 'Update',
                preConfirm: () => {
                    const nama_institusi = document.getElementById('swal-input1').value;
                    const jurusan = document.getElementById('swal-input2').value;
                    const tahun_lulus = document.getElementById('swal-input3').value;

                    if (!nama_institusi || !jurusan || !tahun_lulus) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    } = result.value;

                    pendidikanData.push({
                        nama_institusi,
                        jurusan,
                        tahun_lulus,
                    });

                    renderPendidikan();
                    Swal.fire({
                        icon: 'success',
                        title: 'Pendidikan berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

        function deletePendidikan(index) {
            pendidikanData.splice(index, 1);
            renderPendidikan();
        }

        function convertBase64selfie() {
            var fl = document.getElementById("selfie").files[0];
            type1 = fl.type.split("/")[1];
            var reader = new FileReader();
            reader.onloadend = function() {
                baseStringSelfie = reader.result;
            };
            reader.readAsDataURL(fl);
        }

        function convertBase64ktp() {
            var flt = document.getElementById("ktp").files[0];
            type2 = flt.type.split("/")[1];
            var reader = new FileReader();
            reader.onloadend = function() {
                baseStringKtp = reader.result;
            };
            reader.readAsDataURL(flt);
        }


        async function saveData() {
            var no_anggota = document.getElementById("no_anggota").value;
            var nik = document.getElementById("nik").value;
            var nama_pasangan = document.getElementById('nama_pasangan').value;
            var usia_pasangan = document.getElementById('usia_pasangan').value;
            var pekerjaan_pasangan = document.getElementById('pekerjaan_pasangan').value;
            var pendidikan_pasangan = document.getElementById('pendidikan_pasangan').value;
            var pendidikan_terakhir = document.getElementById('pendidikan_terakhir').value;
            var nama_lengkap = document.getElementById("nama_lengkap").value;
            var tempat_lahir = document.getElementById("tempat_lahir").value;
            var tanggal_lahir = document.getElementById("tanggal_lahir").value;
            var jenis_kelamin = document.querySelector('input[name="jenis_kelamin"]:checked').value;
            var kelurahan = document.getElementById("kelurahan").value;
            var kecamatan = document.getElementById("kecamatan").value;
            var kota = document.getElementById("kota").value;
            var provinsi = document.getElementById("provinsi").value;
            var kode_pos = document.getElementById("kode_pos").value;
            var agama = document.getElementById("agama").value;
            var status_pernikahan = document.getElementById("status_pernikahan").value;
            var pekerjaan = document.getElementById("pekerjaan").value;
            var kewarganegaraan = document.getElementById("kewarganegaraan").value;
            var alamat = document.getElementById("alamat").value;
            var nomor_hp = document.getElementById("nomor_hp").value;
            var email = document.getElementById("email").value;
            var image_selfie = baseStringSelfie;
            var image_ktp = baseStringKtp;
            var validselfie = document.getElementById("selfie").files[0];
            var validktp = document.getElementById("ktp").files[0];
1            // Validasi input
            if (validselfie == "" || validktp == "" || provinsi == '00' || kota == '00' || kecamatan == '00' ||
                kelurahan ==
                '00' || agama == "00" || status_pernikahan == "00" || pekerjaan == "00" || !kewarganegaraan || !tanggal_lahir || !nik || !nama_lengkap || !no_anggota || !email || !alamat || !kode_pos || anggotaKeluarga.length == 0) {

                await Swal.fire({
                    title: "Perhatian!",
                    text: "Pastikan semua data terisi!",
                    icon: "info",
                    confirmButtonText: "OK"
                });
                return false;
            } else if (
                status_pernikahan == "Sudah Kawin" && !nama_pasangan && !nama_pasangan && !usia_pasangan && !pekerjaan_pasangan &&
                !pendidikan_pasangan
            ) {
                await Swal.fire({
                    title: "Perhatian!",
                    text: "Pastikan data pasangan terisi!",
                    icon: "info",
                    confirmButtonText: "OK"
                });
                return false;
            } else if (pendidikan_terakhir != 'Tidak Ada' && pendidikanData.length == 0) {
                await Swal.fire({
                    title: "Perhatian!",
                    text: "Pastikan riwayat pendidikan terisi!",
                    icon: "info",
                    confirmButtonText: "OK"
                });
                return false;

            } else if ((pekerjaan == 'Tidak Bekerja' && checkboxYa.checked == true &&  pekerjaanData.length == 0) || (pekerjaan == 'Tidak Bekerja' && checkboxYa.checked == false && checkboxTidak.checked == false &&  pekerjaanData.length == 0) || (pekerjaan != 'Tidak Bekerja' &&  pekerjaanData.length == 0)) {
                await Swal.fire({
                    title: "Perhatian!",
                    text: "Pastikan riwayat pekerjaan terisi!",
                    icon: "info",
                    confirmButtonText: "OK"
                });
                return false;
            }

            // Tampilkan dialog loading
            Swal.fire({
                title: "Please wait",
                text: "Submitting data...",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            const jsondata = {
                no_anggota,
                nis,
                nik: nik,
                nama_lengkap: nama_lengkap,
                tempat_lahir: tempat_lahir,
                tanggal_lahir: tanggal_lahir,
                jenis_kelamin: jenis_kelamin,
                kelurahan: kelurahan,
                kecamatan: kecamatan,
                pendidikan_terakhir: pendidikan_terakhir,
                kota: kota,
                provinsi: provinsi,
                kode_pos: kode_pos,
                agama: agama,
                status_pernikahan: status_pernikahan,
                pekerjaan: pekerjaan,
                kewarganegaraan: kewarganegaraan,
                alamat: alamat,
                nomor_hp: nomor_hp,
                email: email,
                nama_pasangan,
                usia_pasangan,
                pekerjaan_pasangan,
                pendidikan_pasangan,
                anggotaKeluarga,
                pendidikanData,
                pekerjaanData,
                selfie: image_selfie?.split(",")[1],
                ktp: image_ktp?.split(",")[1],
                id_koperasi: id_koperasi,
            };

            console.log(jsondata);

            // Lakukan permintaan ke server
            try {
                const response = await fetch(`/api/register/anggota/update-insert-anggota/${id_anggota}`, {
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: JSON.stringify(jsondata)
                });

                const data = await response.json();
                Swal.close();

                if (data.response_code == '00') {
                    await Swal.fire({
                        title: "Status Registrasi",
                        text: data?.response_message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    window.location.href = "/";
                } else {
                    await Swal.fire({
                        title: "Status Registrasi",
                        text: data?.response_message,
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            } catch (err) {
                console.error(err);
                Swal.close();
                await Swal.fire({
                    title: "Status Registrasi",
                    text: "Terjadi kesalahan saat memproses data. Silakan coba lagi.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        }
    </script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script>
        feather.replace();
      </script>
    <script src="/assets/dashboard/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/waves/waves.min.js"></script>
    <script src="/assets/dashboard/layouts/modern-light-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="/assets/dashboard/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="/assets/dashboard/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="/assets/dashboard/src/assets/js/users/account-settings.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>

</html>
