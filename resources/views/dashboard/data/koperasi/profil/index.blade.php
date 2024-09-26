@extends('dashboard.layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Setting</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-3">
            <div class="widget-content widget-content-area br-8 p-3">
                <form class="row g-3 needs-validation" novalidate entype="multipart/form-data">
                    <div class="col-md-6 position-relative">
                        <div class="form-group">
                            <label for="nama_koperasi" class="form-label">Nama Koperasi</label>
                            <input type="text" name="nama_koperasi" id="nama_koperasi" class="form-control" value="{{ $koperasi->nama_koperasi }}"
                                placeholder="Masukan Nama Koperasi" />
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ $koperasi->username }}"
                            placeholder="Masukan username" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control"  value="{{ $koperasi->no_phone }}"
                            placeholder="Masukan Nomor HP" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_wa" class="form-label">No WA</label>
                        <input type="text" class="form-control w-100" name="no_wa" id="no_wa" value="{{ $koperasi->hp_wa }}"
                            placeholder="Masukan Nomor WA" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_fax" class="form-label">No Fax</label>
                        <input type="text" class="form-control w-100" name="no_fax" id="no_fax" value="{{ $koperasi->hp_fax }}"
                            placeholder="nama ketua" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="website" class="form-label">URL Website</label>
                        <input type="text" class="form-control w-100" name="website" id="website" value="{{ $koperasi->url_website }}"
                            placeholder="Masukan URL" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="email" class="form-label">Email Koperasi</label>
                        <input type="text" class="form-control w-100" name="email" id="email"  value="{{ $koperasi->email_koperasi }}"
                            placeholder="Masukan Email" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="bidang_koperasi" class="form-label">Bidang Koperasi</label>
                        <input type="text" class="form-control w-100" name="bidang_koperasi" id="bidang_koperasi"  value="{{ $koperasi->bidang_koperasi }}"
                            placeholder="Masukan Bidang Koperasi" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control w-100" name="alamat" id="alamat"  value="{{ $koperasi->alamat }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="kode_pos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control w-100" name="kode_pos" id="kode_pos"  value="{{ $koperasi->kode_pos }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_akta_pendirian" class="form-label">No Akta Pendirian</label>
                        <input type="text" class="form-control w-100" name="no_akta_pendirian" id="no_akta_pendirian"  value="{{ $koperasi->no_akta_pendirian }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="tanggal_akta_pendirian" class="form-label">Tanggal Akta Pendirian</label>
                        <input type="date" class="form-control w-100" name="tanggal_akta_pendirian" id="tanggal_akta_pendirian" value="{{ $koperasi->tanggal_akta_pendirian }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_akta_perubahan" class="form-label">No Akta Perubahan</label>
                        <input type="text" class="form-control w-100" name="no_akta_perubahan" id="no_akta_perubahan"  value="{{ $koperasi->no_akta_perubahan }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="tanggal_akta_perubahan" class="form-label">Tanggal Akta Perubahan</label>
                        <input type="date" class="form-control w-100" name="tanggal_akta_perubahan" id="tanggal_akta_perubahan"  value="{{ $koperasi->tanggal_akta_perubahan }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_skk" class="form-label">No SK Kemenkumham</label>
                        <input type="text" class="form-control w-100" name="no_skk" id="no_skk"  value="{{ $koperasi->no_sk_kemenkumham }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="tanggal_skk" class="form-label">Tanggal SK Kemenkumham</label>
                        <input type="date" class="form-control w-100" name="tanggal_skk" id="tanggal_skk"  value="{{ $koperasi->tanggal_sk_kemenkumham }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_spkk" class="form-label">No SPKUM</label>
                        <input type="text" class="form-control w-100" name="no_spkk" id="no_spkk"  value="{{ $koperasi->no_spkum }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="tanggal_spkk" class="form-label">Tanggal SPKUM</label>
                        <input type="date" class="form-control w-100" name="tanggal_spkk" id="tanggal_spkk"  value="{{ $koperasi->tanggal_spkum }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_siup" class="form-label">Nomor SIUP</label>
                        <input type="text" class="form-control w-100" name="no_siup" id="no_siup"  value="{{ $koperasi->no_siup }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="masa_berlaku_siup" class="form-label">Masa Berlaku SIUP</label>
                        <input type="date" class="form-control w-100" name="masa_berlaku_siup" id="masa_berlaku_siup"  value="{{ $koperasi->masa_berlaku_siup }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_skd" class="form-label">No SK Domisili</label>
                        <input type="text" class="form-control w-100" name="no_skd" id="no_skd"  value="{{ $koperasi->no_sk_domisili }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="masa_berlaku_skd" class="form-label">Masa Berlaku SK Domisili</label>
                        <input type="date" class="form-control w-100" name="masa_berlaku_skd" id="masa_berlaku_skd"  value="{{ $koperasi->masa_berlaku_sk_domisili }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_npwp" class="form-label">No NPWP</label>
                        <input type="text" class="form-control w-100" name="no_npwp" id="no_npwp"  value="{{ $koperasi->no_npwp }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_pkp" class="form-label">No PKP</label>
                        <input type="text" class="form-control w-100" name="no_pkp" id="no_pkp"  value="{{ $koperasi->no_pkp }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="no_sertifikat_koperasi" class="form-label">No Sertifikat Koperasi</label>
                        <input type="text" class="form-control w-100" name="no_sertifikat_koperasi" id="no_sertifikat_koperasi"  value="{{ $koperasi->no_sertifikat_koperasi }}"
                            placeholder="Masukan Nomor" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="singkatan_koperasi" class="form-label">Singkatan Koperasi</label>
                        <input type="text" class="form-control w-100" name="singkatan_koperasi" id="singkatan_koperasi" value="{{ $koperasi->singkatan_koperasi }}"
                            placeholder="Masukan Singkatan Koperasi" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="foto_logo" class="form-label">Logo</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="logoBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="foto_logo" id="foto_logo" value="{{ $koperasi->image_logo }}"
                            placeholder="+628xxxxxxxxx" />
                        <img id="preview-logo" height="100"
                            width="100" class="mt-1"
                            src="/assets/images/default.jpg"
                            alt="Preview Image">
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="foto_npwp" class="form-label">NPWP</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="npwpBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="foto_npwp" id="foto_npwp" value="{{ $koperasi->image_npwp }}"
                            placeholder="+628xxxxxxxxx" />
                        <img id="preview-npwp" height="100"
                            width="100" class="mt-1"
                            src="/assets/images/default.jpg"
                            alt="Preview Image">
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_siup" class="form-label">SIUP</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="siupBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_siup" id="doc_siup" value="{{ $koperasi->doc_siup }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_sk_kemenkumham" class="form-label">SK Kemenkumham</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="skkBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_sk_kemenkumham" id="doc_sk_kemenkumham" value="{{ $koperasi->doc_sk_kemenkumham }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_akta_pendirian" class="form-label">Akta Pendirian</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="aktaPendirianBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_akta_pendirian" id="doc_akta_pendirian" value="{{ $koperasi->doc_akta_pendirian }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_akta_perubahan" class="form-label">Akta Perubahan</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="aktaPerubahanBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_akta_perubahan" id="doc_akta_perubahan" value="{{ $koperasi->doc_akta_perubahan }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_spkk" class="form-label">SPKUM</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="spkumBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_spkk" id="doc_spkk" value="{{ $koperasi->doc_spkum }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_sk_domisili" class="form-label">SK Domisili</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="skDomisiliBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_sk_domisili" id="doc_sk_domisili" value="{{ $koperasi->doc_sk_domisili }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="doc_sertifikat_koperasi" class="form-label">Sertifikat Koperasi</label>
                        <button class="btn btn-dark mb-2" type="button"
                        onclick="sertifikatBtn({{ $id }})">Lihat</button>
                        <input type="file" class="form-control w-100" name="doc_sertifikat_koperasi" id="doc_sertifikat_koperasi" value="{{ $koperasi->doc_sertifikat_koperasi }}"
                            placeholder="+628xxxxxxxxx" />
                    </div>
                    <div class="col-12">
                        <button type="button" onclick="saveData()" name="process" class="btn btn-primary">
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
        let id_koperasi = {{ $id }};
        let urlLogo;
        let urlNpwp;
        let urlAktaPendirian;
        let urlAktaPerubahan;
        let urlSKK;
        let urlSKDU;
        let urlSIUP;
        let urlSPKK;
        let urlSertifikat;
        const npwpInput = document.getElementById('foto_npwp');
        const logoInput = document.getElementById('foto_logo');
        const documentSKK = document.getElementById('doc_sk_kemenkumham');
        const documentAktaPendirian = document.getElementById('doc_akta_pendirian');
        const documentAktaPerubahan = document.getElementById('doc_akta_perubahan');
        const documentSKDU = document.getElementById('doc_sk_domisili');
        const documentSIUP = document.getElementById('doc_siup');
        const documentSertifikat = document.getElementById('doc_sertifikat_koperasi');
        const documentSPKK = document.getElementById('doc_spkk');
        const previewLogo = document.getElementById('preview-logo');
        const previewNpwp = document.getElementById('preview-npwp');
        logoInput.addEventListener('change', (event) => {
            const file = event.target.files[0]; // Ambil file yang dipilih
            if (file) {
                // Buat pratinjau logo menggunakan FileReader
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewLogo.src = e.target.result; // Tampilkan pratinjau logo
                }
                reader.readAsDataURL(file); // Baca file untuk pratinjau

                // Simpan tipe file (ekstensi)

                // Siapkan FormData untuk mengunggah file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','logo');

                // Kirim file ke bucket storage melalui API Laravel
                fetch('/api/file/upload', {
                        method: 'POST',
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('File uploaded successfully:', data);
                        alert('File uploaded successfully!');
                        urlLogo = data.data.selfLink;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error uploading the file.');
                    });
            }
        });

        npwpInput.addEventListener('change', (event) => {
            const file = event.target.files[0]; // Ambil file yang dipilih
            if (file) {
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','npwp');

                // Tampilkan file untuk preview jika itu gambar
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewNpwp.src = e.target.result; // Tampilkan pratinjau gambar
                }
                reader.readAsDataURL(file); // Baca file untuk preview

                // Upload file ke server menggunakan fetch
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlNpwp = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });

        documentSKK.addEventListener('change', () => {
            const file = documentSKK.files[0]; // Ambil file yang dipilih
            if (file) {
                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','skk');

                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlSKK = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });

        documentAktaPendirian.addEventListener('change', () => {
            const file = documentAktaPendirian.files[0]; // Ambil file yang dipilih
            if (file) {

                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','akta_pendirian');

                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlAktaPendirian = data.data.selfLink;

                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });
        documentAktaPerubahan.addEventListener('change', () => {
            const file = documentAktaPerubahan.files[0]; // Ambil file yang dipilih
            if (file) {

                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','akta_perubahan');

                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlAktaPerubahan = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });

        documentSIUP.addEventListener('change', () => {
            const file = documentSIUP.files[0]; // Ambil file yang dipilih
            if (file) {

                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis', 'siup'); // Tambahkan file ke FormData

                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlSIUP = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });
        documentSPKK.addEventListener('change', () => {
            const file = documentSPKK.files[0]; // Ambil file yang dipilih
            if (file) {

                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','spkk');

                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlSPKK = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });
        documentSKDU.addEventListener('change', () => {
            const file = documentSKDU.files[0]; // Ambil file yang dipilih
            if (file) {

                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','skdu');

                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlSKDU = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });

        documentSertifikat.addEventListener('change', () => {
            const file = documentSertifikat.files[0]; // Ambil file yang dipilih
            if (file) {

                // Buat FormData untuk mengirim file ke server
                const formData = new FormData();
                formData.append('file', file); // Tambahkan file ke FormData
                formData.append('jenis','sertifikat');
                // Kirim file ke server melalui API Laravel atau Bucket Storage
                fetch('/api/file/upload', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('File uploaded successfully:', data);
                    alert('File uploaded successfully!');
                    urlSertifikat = data.data.selfLink;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error uploading the file.');
                });
            }
        });
        function logoBtn(id) {
            console.log(id)
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.logo, 'logoWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function npwpBtn(id) {
            console.log(id)
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.npwp, 'npwpWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function aktaPendirianBtn(id) {
            console.log(id)

            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.akta_pendirian, 'aktaPendirianWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function aktaPerubahanBtn(id) {
            console.log(id)

            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.akta_perubahan, 'aktaPerubahanWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function skkBtn(id) {
            console.log(id)
            // var url = `/storage/sk-kemenkumham/${id}`;
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.sk_kemenkumham, 'skkWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function spkumBtn(id) {
            console.log(id)
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.spkum, 'spkumWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function skDomisiliBtn(id) {
            console.log(id)
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.sk_domisili, 'skdWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function siupBtn(id) {
            console.log(id)
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.siup, 'siupWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }

        function sertifikatBtn(id) {
            console.log(id)
            fetch(`/api/koperasi/data/${id}`)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);
                window.open(data.response_message.sertifikat, 'sertifikatWindowed', 'width=800,height=600,top=100,left=100,resizable=yes');
            })
        }
        async function saveData() {
            const nama_koperasi = document.getElementById("nama_koperasi").value;
            const singkatan_koperasi = document.getElementById("singkatan_koperasi").value;
            const email = document.getElementById("email").value;
            const no_telp = document.getElementById("no_telp").value;
            const no_wa = document.getElementById("no_wa").value;
            const no_fax = document.getElementById("no_fax").value;
            const web = document.getElementById("website").value;
            const bidang_koperasi = document.getElementById("bidang_koperasi").value;
            const alamat = document.getElementById("alamat").value;
            const kode_pos = document.getElementById("kode_pos").value;
            const no_akta_pendirian = document.getElementById("no_akta_pendirian").value;
            const tanggal_akta_pendirian = document.getElementById("tanggal_akta_pendirian").value;
            const no_skk = document.getElementById("no_skk").value;
            const tanggal_skk = document.getElementById("tanggal_skk").value;
            const no_spkk = document.getElementById("no_spkk").value;
            const tanggal_spkk = document.getElementById("tanggal_spkk").value;
            const no_akta_perubahan = document.getElementById("no_akta_perubahan").value;
            const tanggal_akta_perubahan = document.getElementById("tanggal_akta_perubahan").value;
            const no_siup = document.getElementById("no_siup").value;
            const masa_berlaku_siup = document.getElementById("masa_berlaku_siup").value;
            const no_skdu = document.getElementById("no_skd").value;
            const masa_berlaku_skdu = document.getElementById("masa_berlaku_skd").value;
            const no_npwp = document.getElementById("no_npwp").value;
            const no_pkp = document.getElementById("no_pkp").value;
            const no_sertifikat = document.getElementById("no_sertifikat_koperasi").value;
            const username = document.getElementById('username').value;
            const image_logo = urlLogo ? urlLogo : "{{ $koperasi->image_logo }}";
            const image_npwp = urlNpwp ? urlNpwp : "{{ $koperasi->image_npwp }}";
            const doc_sk_kemenkumham = urlSKK ? urlSKK : "{{ $koperasi->doc_sk_kemenkumham }}";
            const doc_spkum = urlSPKK ? urlSPKK : "{{ $koperasi->doc_spkum }}";
            const doc_siup = urlSIUP ? urlSIUP : "{{ $koperasi->doc_siup }}";
            const doc_sk_domisili = urlSKDU ? urlSKDU : "{{ $koperasi->doc_sk_domisili }}";
            const doc_akta_pendirian = urlAktaPendirian ? urlAktaPendirian : "{{ $koperasi->doc_akta_pendirian }}";
            const doc_akta_perubahan = urlAktaPerubahan ? urlAktaPerubahan : "{{ $koperasi->doc_akta_perubahan }}";
            const doc_sertifikat_koperasi = urlSertifikat ? urlSertifikat : "{{ $koperasi->doc_sertifikat_koperasi }}";



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
                email,
                username,
                no_telp,
                no_wa,
                no_fax,
                web,
                bidang_koperasi,
                alamat,
                kode_pos,
                no_akta_pendirian,
                tanggal_akta_pendirian,
                no_skk,
                tanggal_skk,
                no_spkk,
                tanggal_spkk,
                no_akta_perubahan,
                tanggal_akta_perubahan,
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
                logo: image_logo,
                image_npwp: image_npwp,
            };

            console.log(jsondata);

            // Lakukan permintaan ke server
            try {
                const response = await fetch(`/api/setting/update-koperasi/${id_koperasi}`, {
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-Type': 'application/json'
                    },
                    method: "PATCH",
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
                    window.location.href = "/setting";
                } else {
                    await Swal.fire({
                        title: "Success!",
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
