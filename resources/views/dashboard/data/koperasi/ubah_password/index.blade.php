@extends('dashboard.layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah Password</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-3">
            <div class="widget-content widget-content-area br-8 p-3">
                <form class="row g-3 needs-validation" novalidate entype="multipart/form-data">
                    <div class="form-group">
                        <label for="password_sekarang" class="form-label">Password Sekarang</label>
                        <input type="text" name="password_sekarang" id="password_sekarang" class="form-control"
                            placeholder="Masukan Nama Koperasi" />
                    </div>
                    <div class="form-group">

                        <label for="password_baru" class="form-label">Password Baru</label>
                        <input type="text" name="password_baru" id="password_baru" class="form-control"
                            placeholder="Masukan username" />
                    </div>

                    <div class="form-group">
                        <label for="konfirmasi_password" class="form-label">Konfirmasi Password Baru</label>
                        <input type="text" name="konfirmasi_password" id="konfirmasi_password" class="form-control"
                            placeholder="Masukan Nomor HP" />
                    </div>
                    <div class="col-12">
                        <button type="button" onclick="savePassword()" name="process" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        async function savePassword() {
            const password_sekarang = document.getElementById("password_sekarang").value;
            const password_baru = document.getElementById("password_baru").value;
            const konfirmasi_password = document.getElementById("konfirmasi_password").value;

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
                password_sekarang,
                password_baru,
                konfirmasi_password,
            };


            // Lakukan permintaan ke server
            try {
                const response = await fetch('/api/setting/update_password/{{$id}}', {
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-Type': 'application/json'
                    },
                    method: "PATCH",
                    body: JSON.stringify(jsondata)
                });

                const data = await response.json();
                Swal.close();
                console.log(data)

                if (data.response_code == '00') {
                    await Swal.fire({
                        title: "Berhasil!",
                        text: data?.response_message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    window.location.href = "/";
                } else {
                    await Swal.fire({
                        title: "Berhasil!",
                        text: data?.response_message,
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            } catch (err) {
                console.error(err);
                Swal.close();
                await Swal.fire({
                    title: "Gagal!",
                    text: "Terjadi kesalahan saat memproses data. Silakan coba lagi.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        }
    </script>
    <script src="/assets/dashboard/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
@endpush
