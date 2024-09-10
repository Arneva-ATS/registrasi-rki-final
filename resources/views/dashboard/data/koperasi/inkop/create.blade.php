@extends('dashboard.layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Data</a></li>
    <li class="breadcrumb-item"><a href="#">Koperasi</a></li>
    <li class="breadcrumb-item"><a href="#">Inkop</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-3">
            <div class="widget-content widget-content-area br-8 p-3">
                <form class="row g-3 needs-validation" novalidate entype="multipart/form-data">
                    <div class="col-md-6 position-relative">
                        <div class="form-group">
                            <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
                            <input type="text" name="namaKoperasi" id="namaKoperasi" class="form-control"
                                placeholder="Masukan Nama Induk Koperasi" />
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="email" class="form-label">Email Koperasi</label>
                        <input type="text" class="form-control w-100" name="email" id="email"
                            placeholder="Ex. email@gmail.com" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="namaKetua" class="form-label">Nama Ketua</label>
                        <input type="text" class="form-control w-100" name="namaKetua" id="namaKetua"
                            placeholder="Nama Ketua Koperasi" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="nomerKetua" class="form-label">Nomer HP Ketua</label>
                        <input type="text" class="form-control w-100" name="nomerKetua" id="nomerKetua"
                            placeholder="Ex. 08xxxxxxxxx" />
                    </div>
                    <div class="col-12">
                        <button type="button" onclick="saveData()" name="process" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script>
        window.addEventListener("load", () => {
            getProvince();
        });
    </script> --}}
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    <script>
        let id_koperasi;
        // let nis
        window.addEventListener("load", () => {
            id_koperasi = {{ $id }};
            // console.log(nis)
        });

        async function saveData() {
            const namaKoperasi = document.getElementById("namaKoperasi").value;
            const namaKetua = document.getElementById("namaKetua").value;
            const nomerKetua = document.getElementById("nomerKetua").value;
            const email = document.getElementById("email").value;

            const jsondata = {
                namaKoperasi,
                id_koperasi,
                namaKetua,
                nomerKetua,
                email,
            };
            await fetch(`/api/register/koperasi/insert-induk`, {
                        headers: {
                            'Access-Control-Allow-Origin': '*',
                            'Content-Type': 'application/json'
                        },
                        method: "POST",
                        body: JSON.stringify(jsondata)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data)
                        if (data.response_code == '00') {
                            swal({
                                title: "Status Registrasi",
                                text: data?.response_message,
                                icon: "success",
                                buttons: true,
                            }).then((willOut) => {
                                if (willOut) {
                                    window.location.href = "/list_inkop";
                                } else {
                                    console.log("error");
                                }
                            });
                        } else {
                            swal({
                                title: "Status Registrasi",
                                text: data?.response_message,
                                icon: "info",
                                buttons: true,
                            }).then((willOut) => {
                                if (willOut) {} else {
                                    console.log("error");
                                }
                            });
                        }
                    }).catch(err => {
                        console.log(err);
                        swal({
                            title: "Status Registrasi",
                            text: 'Server Error',
                            icon: "error",
                            buttons: true,
                        }).then((willOut) => {
                            if (willOut) {
                                //window.location.href = "/registrasi/rki/" + tingkatan_koperasi;
                            } else {
                                console.log("error");
                            }
                        });
                    });
        }
    </script>
@endpush
