<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Registrasi Primkop - RKI </title>
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
                                        aria-controls="animated-underline-home" aria-selected="true"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg> Data anggota</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-profile-tab"
                                        data-bs-toggle="tab" href="#animated-underline-profile" role="tab"
                                        aria-controls="animated-underline-profile" aria-selected="false"
                                        tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> Data Lengkap Koperasi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-pengurus-tab" data-bs-toggle="tab"
                                        href="#animated-pengurus" role="tab" aria-controls="animated-pengurus"
                                        aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> Data Pengurus</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-pengawas-tab" data-bs-toggle="tab"
                                        href="#animated-pengawas" role="tab" aria-controls="animated-pengawas"
                                        aria-selected="false" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> Data Pengawas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-preferences-tab"
                                        data-bs-toggle="tab" href="#animated-underline-preferences" role="tab"
                                        aria-controls="animated-underline-preferences" aria-selected="false"
                                        tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg> Dokumen</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link disabled" id="animated-underline-contact-tab"
                                        data-bs-toggle="tab" href="#animated-underline-contact" role="tab"
                                        aria-controls="animated-underline-contact" aria-selected="false"
                                        tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg> Lampiran Dokumen</button>
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
                                                        <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2"
                                                            id="form-koperasi" hidden>
                                                            <h6 class="">Data Anggota</h6>
                                                            <div class="form">
                                                                <button type="button" onclick="tambahAnggotaBtn()"
                                                                    class="btn btn-success mb-3">Tambah Data</button>
                                                                <div>
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Nama Anggota</th>
                                                                                <th scope="col">Email Anggota</th>
                                                                                <th scope="col">Nomor HP Anggota</th>
                                                                                <th scope="col">Nomor Anggota</th>
                                                                                <th scope="col">Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="anggotaList">

                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-1 d-flex justify-content-center">
                                                                <button type="button" onclick="submitNext()"
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
                                                            <h6>Data Lengkap</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nama_koperasi">Nama
                                                                                Koperasi</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="nama_koperasi"
                                                                                placeholder="Nama Koperasi"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="singkatan_koperasi">Singkatan
                                                                                Koperasi</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="singkatan_koperasi"
                                                                                placeholder="singkatan koperasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email"
                                                                                class="form-control mb-3"
                                                                                id="email"
                                                                                placeholder="Masukan Email Koperasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="web">Website</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="web"
                                                                                placeholder="Masukan URL Website">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="bidang_koperasi">Bidang
                                                                                Koperasi</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="bidang_koperasi"
                                                                                placeholder="Masukan Bidang Koperasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_telp">No Telp</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_telp"
                                                                                placeholder="Masukan Nomor Telepon">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_wa">No WA</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_wa"
                                                                                placeholder="Masukan Nomor WA">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_fax">No Fax</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_fax"
                                                                                placeholder="Masukan  No Fax">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="foto_profil">Upload Logo<span
                                                                                style="color: red;">*</span></label>
                                                                        <input type="file"
                                                                            class="form-control mb-1" id="foto_logo"
                                                                            name="foto_logo" required />
                                                                        <img id="preview-logo" height="100"
                                                                            width="100" class="mt-1 mb-3"
                                                                            src="/assets/images/default.jpg"
                                                                            alt="Preview Image">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label for="alamat">Alamat Lengkap</label>
                                                                        <textarea type="text" class="form-control" style="height: 120px" onkeyup="getVals(this, 'alamat');"
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
                                                                                class="text-danger mt-1 hidden"></div>
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
                                                                                class="text-danger mt-1 hidden"></div>
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
                                                                                class="text-danger mt-1 hidden"></div>
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
                                                                                class="text-danger mt-1 hidden"></div>
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
                                                                        {{-- <button type="button" onclick="previousBtn()"
                                                                            class="btn btn-secondary">Previous</button> --}}
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
                                                                <h6>Data Pengawas</h6>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2">
                                                                        <div class="form">
                                                                            <button type="button"
                                                                                onclick="tambahPengawasBtn()"
                                                                                class="btn btn-success mb-3">Tambah
                                                                                Data</button>
                                                                            <div>
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th scope="col">#</th>
                                                                                            <th scope="col">Nama
                                                                                                Pengawas</th>
                                                                                            <th scope="col">Jabatan
                                                                                            </th>
                                                                                            <th scope="col">Nomor
                                                                                                Telepon</th>
                                                                                            <th scope="col">Aksi
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="pengawasList">

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
                                                                <h6>Data Pengurus</h6>

                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-8 mt-md-0 mt-4 mt-2">
                                                                        <div class="form">
                                                                            <button type="button"
                                                                                onclick="tambahPengurusBtn()"
                                                                                class="btn btn-success mb-3">Tambah
                                                                                Data</button>
                                                                            <div id="pengurusList">

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
                                                            <h6>Dokumen</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_akta">Nomor Akta
                                                                                Pendirian</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_akta"
                                                                                placeholder="Masukan Nomor Akta"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_akta">Tanggal Akta
                                                                                Pendirian</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="tanggal_akta"
                                                                                placeholder="Masukan Tanggal Akta">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_skk">Nomor SK
                                                                                Kemenkumham</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_skk"
                                                                                placeholder="Masukan Nomor SK">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_skk">Tanggal SK</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="tanggal_skk"
                                                                                placeholder="Masukan Tanggal SK">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_spkk">Nomor Surat
                                                                                Pengesahan Koperasi dari Kemenkop &
                                                                                UKM</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_spkk"
                                                                                placeholder="Masukan Nomor Surat Pengesahan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tanggal_spkk">Tanggal Surat
                                                                                Pengesahan</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="tanggal_spkk"
                                                                                placeholder="Masukan Tanggal Surat">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_akta_perubahan">Nomor Akta
                                                                                Perubahan</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_akta_perubahan"
                                                                                placeholder="Masukan Nomor Akta Perubahan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="masa_berlaku_perubahan">Tanggal
                                                                                Masa Berlaku Akta</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="masa_berlaku_perubahan"
                                                                                placeholder="Masukan Tanggal Berlaku">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_siup">Nomor
                                                                                SIUP/NIB</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_siup"
                                                                                placeholder="Masukan Nomor SIUP/NIB">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="masa_berlaku_siup">Tanggal Masa
                                                                                Berlaku SIUP/NIB</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="masa_berlaku_siup"
                                                                                placeholder="Masukan Tanggal Berlaku">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_skdu">Nomor Surat
                                                                                Keterangan Domisili Usaha</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_skdu"
                                                                                placeholder="Masukan Nomor Surat Keterangan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="masa_berlaku_skdu">Tanggal Masa
                                                                                Berlaku Surat Domisili Usaha</label>
                                                                            <input type="date"
                                                                                class="form-control mb-3"
                                                                                id="masa_berlaku_skdu"
                                                                                placeholder="Masukan Tanggal Berlaku">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_npwp">Nomor NPWP</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_npwp"
                                                                                placeholder="Masukan Nomor NPWP">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_pkp">Nomor PKP</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_pkp"
                                                                                placeholder="Masukan Nomor PKP">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="no_sertifikat">Nomor Sertifikat
                                                                                Koperasi</label>
                                                                            <input type="text"
                                                                                class="form-control mb-3"
                                                                                id="no_sertifikat"
                                                                                placeholder="Masukan Nomor Sertifikat">
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
                                                            <h6>Lampiran Dokumen</h6>
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_akta_pendirian">Upload
                                                                                Dokumen Akta Pendirian<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_akta_pendirian"
                                                                                name="doc_akta_pendirian" required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_sk_kemenkumham">Upload
                                                                                Dokumen SK Kemenkumham<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_sk_kemenkumham"
                                                                                name="doc_sk_kemenkumham" required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_spkk">Upload Dokumen Surat
                                                                                Pengesahan<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_spkk" name="doc_spkk"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_akta_perubahan">Upload
                                                                                Dokumen Akta Perubahan<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_akta_perubahan"
                                                                                name="doc_akta_perubahan" required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_siup">Upload Dokumen
                                                                                SIUP<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_siup" name="doc_siup"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_skdu">Upload Dokumen
                                                                                SKDU<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_skdu" name="doc_skdu"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="foto_npwp">Upload NPWP<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="foto_npwp" name="foto_npwp"
                                                                                required />
                                                                            <img id="preview-npwp" height="100"
                                                                                width="100" class="mt-1"
                                                                                src="/assets/images/default.jpg"
                                                                                alt="Preview Image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="doc_sertifikat_koperasi">Upload
                                                                                Dokumen Sertifikat<span
                                                                                    style="color: red;">*</span></label>
                                                                            <input type="file" class="form-control"
                                                                                id="doc_sertifikat_koperasi"
                                                                                name="doc_sertifikat_koperasi"
                                                                                required />
                                                                            <p><span style="color: red;">*)</span>Buat
                                                                                dalam bentuk PDF </p>
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
        // let baseStringKtpKetua;
        let baseStringKtpPengawas;
        let baseStringLogo;
        let baseStringNpwp;
        let baseStringDokumenAktaPendirian;
        let baseStringDokumenAktaPerubahan;
        let baseStringDokumenSKK;
        let baseStringDokumenSKDU;
        let baseStringDokumenSIUP;
        let baseStringDokumenSPKK;
        let baseStringDokumenSertifikat;
        // let tingkatan_koperasi;
        let koperasi;
        let id_koperasi;
        let anggotaData = [];
        let list_anggota = @json($list_anggota);
        console.log(list_anggota)
        let pengurusData = [];
        let pengawasData = [];
        const npwpInput = document.getElementById('foto_npwp');
        const logoInput = document.getElementById('foto_logo');
        const documentSKK = document.getElementById('doc_sk_kemenkumham');
        const documentAktaPendirian = document.getElementById('doc_akta_pendirian');
        const documentAktaPerubahan = document.getElementById('doc_akta_perubahan');
        const documentSKDU = document.getElementById('doc_skdu');
        const documentSIUP = document.getElementById('doc_siup');
        const documentSertifikat = document.getElementById('doc_sertifikat_koperasi');
        const documentSPKK = document.getElementById('doc_spkk');
        const previewKtpKetua = document.getElementById('preview-ktp-ketua');
        const previewKtpPengawas = document.getElementById('preview-ktp-pengawas');
        const previewLogo = document.getElementById('preview-logo');
        const previewNpwp = document.getElementById('preview-npwp');
        window.addEventListener("load", () => {
            nis = '{{ $nis }}';
            getProvince();
            renderAnggotaList();
        });

        function confirm() {
            const otp = document.getElementById('otp').value;
            fetch(`/api/koperasi/verifikasi-otp/${otp}/${nis}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.response_code !== '00') {
                        alert(data.response_message);
                    } else {
                        document.getElementById('nama_koperasi').value = data.response_message.nama_koperasi;
                        document.getElementById('email').value = data.response_message.email_koperasi;
                        // Enable next step
                        document.getElementById('form-koperasi').hidden = false;
                        pengurusData.push({
                            nama_pengurus: data.response_message.nama_pengurus,
                            jabatan: data.response_message.jabatan,
                            nomor_hp: data.response_message.nomor_hp,
                        })
                        // document.getElementById('nis').disabled = true;
                        renderPengurusList();
                        document.getElementById('confirm-btn').disabled = true;
                        document.getElementById('otp').disabled = true;
                        id_koperasi = data.response_message.id_koperasi
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

        function renderAnggotaList() {
            const anggotaList = document.getElementById('anggotaList');
            anggotaList.innerHTML = ''; // Mengosongkan isi elemen sebelum dirender ulang

            // Render list_anggota
            list_anggota.forEach((anggota, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${index + 1}</td>
            <td>${anggota.nama_lengkap}</td>
            <td>${anggota.email}</td>
            <td>${anggota.nomor_hp}</td>
            <td>${anggota.no_anggota}</td>
        `;
                anggotaList.appendChild(row);
            });

            // Render anggotaData dengan penomoran yang dilanjutkan dari list_anggota
            anggotaData.forEach((anggota, index) => {
                const rowIndex = index + list_anggota.length + 1; // Adjust numbering based on length of list_anggota
                const row = document.createElement('tr');
                row.innerHTML = `
            <td>${rowIndex}</td>
            <td>${anggota.nama_anggota}</td>
            <td>${anggota.email}</td>
            <td>${anggota.nomor_hp}</td>
            <td>${anggota.no_anggota}</td>
            <td>
                <button class="btn btn-warning btn-sm" type="button" onclick="editAnggota(${index}, 'anggotaData')">Edit</button>
                <button class="btn btn-danger btn-sm" type="button" onclick="deleteAnggota(${index}, 'anggotaData')">Delete</button>
            </td>
        `;
                anggotaList.appendChild(row);
            });
        }


        function tambahAnggotaBtn() {
            Swal.fire({
                title: "Tambah Anggota",
                html: `
            <input id="swal-input1" class="swal2-input" placeholder="Nama Anggota">
            <input id="swal-input2" class="swal2-input" placeholder="Email Koperasi">
            <input id="swal-input3" class="swal2-input" placeholder="Nomor HP">
                <input id="swal-input4" class="swal2-input" placeholder="No Anggota">
        `,
                showCancelButton: true,
                confirmButtonText: "Tambah",
                preConfirm: () => {
                    const nama_anggota = document.getElementById('swal-input1').value;
                    const email = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;
                    const no_anggota = document.getElementById('swal-input4').value;

                    if (!nama_anggota || !email || !nomor_hp || !no_anggota) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_anggota,
                        email,
                        nomor_hp,
                        no_anggota
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_anggota,
                        email,
                        nomor_hp,
                        no_anggota
                    } = result.value;

                    anggotaData.push({
                        nama_anggota: nama_anggota,
                        email: email,
                        nomor_hp: nomor_hp,
                        no_anggota: no_anggota,
                    });

                    renderAnggotaList();
                    console.log(anggotaData);
                }
            });
        }

        function editAnggota(index) {
            const anggota = anggotaData[index];
            Swal.fire({
                title: "Edit Anggota",
                html: `
            <input id="swal-input1" class="swal2-input" value="${anggota.nama_anggota}" placeholder="Nama Anggota">
            <input id="swal-input2" class="swal2-input" value="${anggota.email}" placeholder="Email Anggota">
            <input id="swal-input3" class="swal2-input" value="${anggota.nomor_hp}" placeholder="Nomor HP Anggota">
            <input id="swal-input4" class="swal2-input" value="${anggota.no_anggota}" placeholder="Nomor Anggota">

        `,
                showCancelButton: true,
                confirmButtonText: "Update",
                preConfirm: () => {
                    const nama_anggota = document.getElementById('swal-input1').value;
                    const email = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;
                    const no_anggota = document.getElementById('swal-input4').value;

                    if (!nama_anggota || !email || !nomor_hp || !no_anggota) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_anggota,
                        email,
                        nomor_hp,
                        no_anggota
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_anggota,
                        email,
                        nomor_hp,
                        no_anggota
                    } = result.value;

                    anggotaData[index] = {
                        nama_anggota,
                        email,
                        nomor_hp,
                        no_anggota
                    };
                    console.log(anggotaData)
                    renderAnggotaList();
                    Swal.fire('Updated!', 'Data anggota telah diperbarui.', 'success');
                }
            });
        }

        function deleteAnggota(index) {
            anggotaData.splice(index, 1);
            renderAnggotaList();
        }

        function renderPengurusList() {
            const pengurusList = document.getElementById('pengurusList');
            pengurusList.innerHTML = '';

            // Buat elemen tabel
            const table = document.createElement('table');
            table.className = 'table table-bordered';

            // Buat header tabel
            const thead = document.createElement('thead');
            thead.innerHTML = `
        <tr>
            <th>No</th>
            <th>Nama Pengurus</th>
            <th>Jabatan</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
    `;
            table.appendChild(thead);

            // Buat body tabel
            const tbody = document.createElement('tbody');

            pengurusData.forEach((pengurus, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
            <td>${index + 1}</td>
            <td>${pengurus.nama_pengurus}</td>
            <td>${pengurus.jabatan}</td>
            <td>${pengurus.nomor_hp}</td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editPengurus(${index})" ${index < 1 ? 'hidden' : ''}>Edit</button>
                <button class="btn btn-danger btn-sm" onclick="deletePengurus(${index})" ${index < 1 ? 'hidden' : ''}>Delete</button>
            </td>
        `;

                tbody.appendChild(row);
            });

            table.appendChild(tbody);
            pengurusList.appendChild(table);
        }


        function tambahPengurusBtn() {
            Swal.fire({
                title: 'Tambah Pengurus',
                html: `
            <input id="swal-input1" class="swal2-input" placeholder="Nama Pengurus">
            <input id="swal-input2" class="swal2-input" placeholder="Jabatan">
            <input id="swal-input3" class="swal2-input" placeholder="Nomor Telepon">
        `,
                showCancelButton: true,
                confirmButtonText: 'Tambah',
                preConfirm: () => {
                    const nama_pengurus = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengurus || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengurusData.push({
                        nama_pengurus,
                        jabatan,
                        nomor_hp,
                        id_koperasi: id_koperasi
                    });

                    renderPengurusList();
                    console.log(pengurusData);

                    Swal.fire('Berhasil!', 'Pengurus berhasil ditambahkan.', 'success');
                }
            });
        }

        function editPengurus(index) {
            const pengurus = pengurusData[index];
            Swal.fire({
                title: 'Edit Pengurus',
                html: `
            <input id="swal-input1" class="swal2-input" value="${pengurus.nama_pengurus}" placeholder="Nama Pengurus">
            <input id="swal-input2" class="swal2-input" value="${pengurus.jabatan}" placeholder="Jabatan">
            <input id="swal-input3" class="swal2-input" value="${pengurus.nomor_hp}" placeholder="Nomor Telepon">
        `,
                showCancelButton: true,
                confirmButtonText: 'Update',
                cancelButtonText: 'Batal',
                preConfirm: () => {
                    const nama_pengurus = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengurus || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengurus,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengurusData[index] = {
                        nama_pengurus,
                        jabatan,
                        nomor_hp,
                        id_koperasi: id_koperasi
                    };

                    renderPengurusList();
                    Swal.fire('Berhasil!', 'Data pengurus berhasil diperbarui.', 'success');
                }
            });
        }

        function deletePengurus(index) {
            pengurusData.splice(index, 1);
            renderPengurusList();
        }

        function renderPengawasList() {
            const pengawasList = document.getElementById('pengawasList');
            pengawasList.innerHTML = '';
            pengawasData.forEach((pengawas, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${pengawas.nama_pengawas}</td>
                        <td>${pengawas.jabatan}</td>
                        <td>${pengawas.nomor_hp}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editPengawas(${index})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deletePengawas(${index})">Delete</button>
                        </td>
                    `;
                pengawasList.appendChild(row);
            });

        }

        function tambahPengawasBtn() {
            Swal.fire({
                title: 'Tambah Pengawas',
                html: `
                    <input id="swal-input1" class="swal2-input" placeholder="Nama Pengawas">
                    <input id="swal-input2" class="swal2-input" placeholder="Jabatan">
                    <input id="swal-input3" class="swal2-input" placeholder="Nomor Telepon">
                `,
                showCancelButton: true,
                confirmButtonText: 'Tambah',
                preConfirm: () => {
                    const nama_pengawas = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengawas || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengawasData.push({
                        nama_pengawas,
                        jabatan,
                        nomor_hp,
                        id_koperasi: id_koperasi
                    });

                    renderPengawasList();
                    Swal.fire({
                        icon: 'success',
                        title: 'Pengawas berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

        function editPengawas(index) {
            const pengawas = pengawasData[index];

            Swal.fire({
                title: 'Edit Pengawas',
                html: `
                    <input id="swal-input1" class="swal2-input" value="${pengawas.nama_pengawas}" placeholder="Nama Pengawas">
                    <input id="swal-input2" class="swal2-input" value="${pengawas.jabatan}" placeholder="Jabatan">
                    <input id="swal-input3" class="swal2-input" value="${pengawas.nomor_hp}" placeholder="Nomor Telepon">
                `,
                showCancelButton: true,
                confirmButtonText: 'Update',
                preConfirm: () => {
                    const nama_pengawas = document.getElementById('swal-input1').value;
                    const jabatan = document.getElementById('swal-input2').value;
                    const nomor_hp = document.getElementById('swal-input3').value;

                    if (!nama_pengawas || !jabatan || !nomor_hp) {
                        Swal.showValidationMessage('Semua bidang harus diisi');
                        return false;
                    }

                    return {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    } = result.value;

                    pengawasData[index] = {
                        nama_pengawas,
                        jabatan,
                        nomor_hp
                    };

                    renderPengawasList();
                    Swal.fire({
                        icon: 'success',
                        title: 'Pengawas berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

        function deletePengawas(index) {
            pengawasData.splice(index, 1);
            renderPengawasList();
        }
        logoInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewLogo.src = e.target.result;
                    baseStringLogo = e.target.result;
                    type3 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });
        npwpInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewNpwp.src = e.target.result;
                    baseStringNpwp = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });
        documentSKK.addEventListener('change', () => {
            const file = documentSKK.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenSKK = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });

        documentAktaPendirian.addEventListener('change', () => {
            const file = documentAktaPendirian.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenAktaPendirian = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });
        documentAktaPerubahan.addEventListener('change', () => {
            const file = documentAktaPerubahan.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenAktaPerubahan = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });

        documentSIUP.addEventListener('change', () => {
            const file = documentSIUP.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenSIUP = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });
        documentSPKK.addEventListener('change', () => {
            const file = documentSPKK.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenSPKK = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });
        documentSKDU.addEventListener('change', () => {
            const file = documentSKDU.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenSKDU = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });

        documentSertifikat.addEventListener('change', () => {
            const file = documentSertifikat.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    baseStringDokumenSertifikat = e.target.result;
                    type4 = file.type.split('/')[1];
                }
                reader.readAsDataURL(file);
            }
        });

        async function submitNext() {
            let data = {
                anggotaData: anggotaData,
                nis: nis
            };
            if (list_anggota.length > 0 && anggotaData.length == 0) {
                const activeTab = document.querySelector('#animateLine .nav-link.active');

                // Mendapatkan tab berikutnya
                const nextTab = activeTab.parentElement.nextElementSibling?.querySelector(
                    '.nav-link');

                if (nextTab) {
                    // Mengaktifkan tab berikutnya
                    new bootstrap.Tab(nextTab).show();
                }
            } else {
                await fetch(`/api/register/data/anggota/${id_koperasi}`, {
                        headers: {
                            'Access-Control-Allow-Origin': '*',
                            'Content-Type': 'application/json'
                        },
                        method: "POST",
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data)
                        if (data.response_code == '00') {
                            Swal.fire({
                                title: "Status",
                                text: data?.response_message,
                                icon: "success",
                                showCancelButton: true,
                                confirmButtonText: 'Next',
                                cancelButtonText: 'Cancel'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    const activeTab = document.querySelector(
                                        '#animateLine .nav-link.active');

                                    // Mendapatkan tab berikutnya
                                    const nextTab = activeTab.parentElement.nextElementSibling
                                        ?.querySelector(
                                            '.nav-link');

                                    if (nextTab) {
                                        // Mengaktifkan tab berikutnya
                                        new bootstrap.Tab(nextTab).show();
                                    }
                                } else {
                                    console.log("error");
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Status",
                                text: data?.response_message,
                                icon: "error",
                                showCancelButton: true,
                                confirmButtonText: 'Retry',
                                cancelButtonText: 'Cancel'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // handle retry logic here if needed
                                } else {
                                    console.log("error");
                                }
                            });
                        }
                    }).catch(err => {
                        console.log(err);
                        Swal.fire({
                            title: "Status",
                            text: err.message,
                            icon: "info",
                            showCancelButton: true,
                            confirmButtonText: 'Retry',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // handle retry logic here if needed
                            } else {
                                console.log("error");
                            }
                        });
                    });

            }


        }
        async function saveData() {
            const nama_koperasi = document.getElementById("nama_koperasi").value;
            const singkatan_koperasi = document.getElementById("singkatan_koperasi").value;
            const email = document.getElementById("email").value;
            const no_telp = document.getElementById("no_telp").value;
            const no_wa = document.getElementById("no_wa").value;
            const no_fax = document.getElementById("no_fax").value;
            const web = document.getElementById("web").value;
            const bidang_koperasi = document.getElementById("bidang_koperasi").value;
            const alamat = document.getElementById("alamat").value;
            const kelurahan = document.getElementById("kelurahan").value;
            const kecamatan = document.getElementById("kecamatan").value;
            const kota = document.getElementById("kota").value;
            const provinsi = document.getElementById("provinsi").value;
            const kode_pos = document.getElementById("kode_pos").value;
            const no_akta = document.getElementById("no_akta").value;
            const tanggal_akta = document.getElementById("tanggal_akta").value;
            const no_skk = document.getElementById("no_skk").value;
            const tanggal_skk = document.getElementById("tanggal_skk").value;
            const no_spkk = document.getElementById("no_spkk").value;
            const tanggal_spkk = document.getElementById("tanggal_spkk").value;
            const no_akta_perubahan = document.getElementById("no_akta_perubahan").value;
            const masa_berlaku_perubahan = document.getElementById("masa_berlaku_perubahan").value;
            const no_siup = document.getElementById("no_siup").value;
            const masa_berlaku_siup = document.getElementById("masa_berlaku_siup").value;
            const no_skdu = document.getElementById("no_skdu").value;
            const masa_berlaku_skdu = document.getElementById("masa_berlaku_skdu").value;
            const no_npwp = document.getElementById("no_npwp").value;
            const no_pkp = document.getElementById("no_pkp").value;
            const no_sertifikat = document.getElementById("no_sertifikat").value;

            const image_logo = baseStringLogo;
            const image_npwp = baseStringNpwp;
            const doc_sk_kemenkumham = baseStringDokumenSKK;
            const doc_spkum = baseStringDokumenSPKK;
            const doc_siup = baseStringDokumenSIUP;
            const doc_sk_domisili = baseStringDokumenSKDU;
            const doc_akta_pendirian = baseStringDokumenAktaPendirian;
            const doc_akta_perubahan = baseStringDokumenAktaPerubahan;
            const doc_sertifikat_koperasi = baseStringDokumenSertifikat;

            const validLogo = logoInput.files[0];
            const validSKK = document.getElementById("doc_sk_kemenkumham").files[0];
            const validSKDU = document.getElementById("doc_skdu").files[0];
            const validSIUP = document.getElementById("doc_siup").files[0];
            const validSertifikat = document.getElementById("doc_sertifikat_koperasi").files[0];
            const validSPKK = document.getElementById("doc_spkk").files[0];
            const validAktaPendirian = document.getElementById("doc_akta_pendirian").files[0];
            const validAktaPerubahan = document.getElementById("doc_akta_perubahan").files[0];

            // Validasi input
            if (!validLogo || !validAktaPendirian || !validAktaPerubahan || !validSIUP || !validSKDU || !validSKK || !
                validSPKK || !validSertifikat || provinsi == '00' || kota == '00' || kecamatan == '00' || kelurahan ==
                '00') {
                await Swal.fire({
                    title: "Perhatian!",
                    text: "Pastikan semua data terisi!",
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
                singkatan_koperasi,
                nama_koperasi,
                pengurusData: pengurusData.slice(1),
                pengawasData,
                email,
                no_telp,
                no_wa,
                no_fax,
                web,
                bidang_koperasi,
                alamat,
                kelurahan,
                kecamatan,
                kota,
                provinsi,
                kode_pos,
                no_akta,
                tanggal_akta,
                no_skk,
                tanggal_skk,
                no_spkk,
                tanggal_spkk,
                no_akta_perubahan,
                masa_berlaku_perubahan,
                no_siup,
                masa_berlaku_siup,
                no_skdu,
                masa_berlaku_skdu,
                no_npwp,
                no_pkp,
                no_sertifikat,
                doc_sk_kemenkumham,
                doc_spkum,
                doc_siup,
                doc_sk_domisili,
                doc_akta_pendirian,
                doc_akta_perubahan,
                doc_sertifikat_koperasi,
                logo: image_logo?.split(",")[1],
                image_npwp: image_npwp?.split(",")[1],
            };

            console.log(jsondata);

            // Lakukan permintaan ke server
            try {
                const response = await fetch(`/api/register/rki/update-koperasi/${id_koperasi}`, {
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
