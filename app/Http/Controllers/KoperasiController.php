<?php

namespace App\Http\Controllers;

use App\Mail\LinkMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Throwable;
use Illuminate\Support\Facades\Session;
use App\Services\GoogleCloudStorageService;

class KoperasiController extends Controller
{
    protected $gcsService;

    public function __construct(GoogleCloudStorageService $gcsService)
    {
        $this->gcsService = $gcsService;
    }
    // Fungsi untuk mengambil signed URL dari link yang disimpan di database
    private function generateSignedUrlFromLink($fileUrl)
    {
        // Ekstrak nama file dari URL (https://www.googleapis.com/storage/v1/b/registrasi/o/ diikuti oleh nama file)
        $parsedUrl = parse_url($fileUrl);

        // Decode path dan ambil bagian setelah "/o/" sebagai nama file
        $filePath = urldecode(basename($parsedUrl['path']));

        // Generate signed URL menggunakan nama file yang diekstrak
        return $this->gcsService->generateSignedUrl($filePath);
    }

    //Update seluruh data koperasi
    public function update_koperasi(Request $request, $id_koperasi)
    {

        DB::beginTransaction();

        try {
            // // URL atau path file untuk disimpan di database
            $logoUrl = $request->logo;
            $npwpUrl = $request->image_npwp;
            $dokumenSIUPUrl = $request->doc_siup;
            $dokumenAktaPendirianUrl = $request->doc_akta_pendirian;
            $dokumenAktaPerubahanUrl = $request->doc_akta_perubahan;
            $dokumenSKKUrl = $request->doc_sk_kemenkumham;
            $dokumenSPKUMUrl = $request->doc_spkum;
            $dokumenSKDomisiliUrl = $request->doc_sk_domisili;
            $dokumenSertifikatUrl = $request->doc_sertifikat_koperasi;

            // Menyimpan seluruh data koperasi yang direquest kedalam array
            $koperasiData = [
                'nama_koperasi' => $request->nama_koperasi,
                'singkatan_koperasi' => $request->singkatan_koperasi,
                'email_koperasi' => $request->email,
                'no_phone' => $request->no_telp,
                'hp_wa' => $request->no_wa,
                'hp_fax' => $request->no_fax,
                'url_website' => $request->web,
                'username' => $request->username,
                'bidang_koperasi' => $request->bidang_koperasi,
                'alamat' => $request->alamat,
                'kode_pos' => $request->kode_pos,
                'no_akta_pendirian' => $request->no_akta_pendirian,
                'tanggal_akta_pendirian' => $request->tanggal_akta_pendirian,
                'no_sk_kemenkumham' => $request->no_skk,
                'tanggal_sk_kemenkumham' => $request->tanggal_skk,
                'no_akta_perubahan' => $request->no_akta_perubahan,
                'tanggal_akta_perubahan' => $request->tanggal_akta_perubahan,
                'no_spkum' => $request->no_spkk,
                'tanggal_spkum' => $request->tanggal_spkk,
                'no_siup' => $request->no_siup,
                'masa_berlaku_siup' => $request->masa_berlaku_siup,
                'no_sk_domisili' => $request->no_skdu,
                'masa_berlaku_sk_domisili' => $request->masa_berlaku_skdu,
                'no_npwp' => $request->no_npwp,
                'no_pkp' => $request->no_pkp,
                'no_sertifikat_koperasi' => $request->no_sertifikat,
                'image_logo' => $logoUrl,
                'image_npwp' => $npwpUrl,
                'doc_siup' => $dokumenSIUPUrl,
                'doc_akta_pendirian' => $dokumenAktaPendirianUrl,
                'doc_akta_perubahan' => $dokumenAktaPerubahanUrl,
                'doc_sk_kemenkumham' => $dokumenSKKUrl,
                'doc_spkum' => $dokumenSPKUMUrl,
                'doc_sk_domisili' => $dokumenSKDomisiliUrl,
                'doc_sertifikat_koperasi' => $dokumenSertifikatUrl,
            ];

            // Mendapatkan id koperasi
            $koperasiId = DB::table('tbl_koperasi')->where('id', $id_koperasi)->update($koperasiData);

            // Jika id koperasi tidak ditemukan
            // if (!$koperasiId) {
            //     throw new \Exception('Gagal Update Data!');
            // }

            DB::commit();
            return response()->json([
                'response_code' => "00",
                'response_message' => 'Sukses Mengubah Data',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 400);
        }
    }

    public function change_password(Request $request, $id_koperasi){
        DB::beginTransaction();
        try{
            $request->validate([
                'password_sekarang'=>'required',
                'password_baru' => 'required',
                'konfirmasi_password'=>'required'
            ]);
            $password_baru = $request->password_baru;
            $konfirmasi_password = $request->konfirmasi_password;
            $password_sekarang = $request->password_sekarang;

            $koperasi = DB::table('tbl_koperasi')->where('id', $id_koperasi)->first();
            $password = $koperasi->password;
            if($password_sekarang != $password){
                throw new \Exception('Password Lama Salah!');
            } else if($konfirmasi_password != $password_baru){
                throw new \Exception('Konfirmasi Password Salah!');
            }
            DB::table('tbl_koperasi')->where('id', $id_koperasi)->update(['password'=>$password_baru]);

            DB::commit();
            return response()->json([
                'response_code' => "00",
                'response_message' => 'Berhasil Ganti Password',
            ], 200);
        }catch(\Throwable $th){
            DB::rollBack();

            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 400);
        }
    }

    public function update_koperasi_rki(Request $request, $id_koperasi)
    {

        DB::beginTransaction();

        try {
            $request->validate([
                'nama_koperasi' => 'required',
                'singkatan_koperasi' => 'required',
                'email' => 'required|email',
                'no_telp' => 'required',
                'no_wa' => 'required',
                'bidang_koperasi' => 'required',
                'alamat' => 'required',
                'kelurahan' => 'required',
                'kecamatan' => 'required',
                'kota' => 'required',
                'pengurusData' => 'required|array',
                'pengawasData' => 'required|array',
                'provinsi' => 'required',
                'kode_pos' => 'required',
                'no_akta' => 'required',
                'tanggal_akta' => 'required|date',
                'no_skk' => 'required',
                'tanggal_skk' => 'required|date',
                'no_akta_perubahan' => 'required',
                'masa_berlaku_perubahan' => 'required|date',
                'no_spkk' => 'required',
                'tanggal_spkk' => 'required|date',
                'no_siup' => 'required',
                'masa_berlaku_siup' => 'required|date',
                'no_skdu' => 'required',
                'masa_berlaku_skdu' => 'required|date',
                'no_npwp' => 'required',
                'no_pkp' => 'required',
                'no_sertifikat' => 'required',
                'logo' => 'required',
                'image_npwp' => 'required',
                'doc_akta_pendirian' => 'required',
                'doc_akta_perubahan' => 'required',
                'doc_siup' => 'required',
                'doc_sk_kemenkumham' => 'required',
                'doc_spkum' => 'required',
                'doc_sk_domisili' => 'required',
                'doc_sertifikat_koperasi' => 'required',
            ]);


            // // URL atau path file untuk disimpan di database
            $logoUrl = $request->logo;
            $npwpUrl = $request->image_npwp;
            $dokumenSIUPUrl = $request->doc_siup;
            $dokumenAktaPendirianUrl = $request->doc_akta_pendirian;
            $dokumenAktaPerubahanUrl = $request->doc_akta_perubahan;
            $dokumenSKKUrl = $request->doc_sk_kemenkumham;
            $dokumenSPKUMUrl = $request->doc_spkum;
            $dokumenSKDomisiliUrl = $request->doc_sk_domisili;
            $dokumenSertifikatUrl = $request->doc_sertifikat_koperasi;
            $username = $request->singkatan_koperasi  . str_pad(rand(0, 2), 2, '0', STR_PAD_LEFT);
            $password = bin2hex(openssl_random_pseudo_bytes(10));

            // Menyimpan seluruh data koperasi yang direquest kedalam array
            $koperasiData = [
                'nama_koperasi' => $request->nama_koperasi,
                'singkatan_koperasi' => $request->singkatan_koperasi,
                'email_koperasi' => $request->email,
                'no_phone' => $request->no_telp,
                'hp_wa' => $request->no_wa,
                'hp_fax' => $request->no_fax,
                'url_website' => $request->web,
                'username' => $username,
                'password' => $password,
                'bidang_koperasi' => $request->bidang_koperasi,
                'alamat' => $request->alamat,
                'id_kelurahan' => $request->kelurahan,
                'id_kecamatan' => $request->kecamatan,
                'id_kota' => $request->kota,
                'id_provinsi' => $request->provinsi,
                'kode_pos' => $request->kode_pos,
                'approval' => 1,
                'no_akta_pendirian' => $request->no_akta,
                'tanggal_akta_pendirian' => $request->tanggal_akta,
                'no_sk_kemenkumham' => $request->no_skk,
                'tanggal_sk_kemenkumham' => $request->tanggal_skk,
                'no_akta_perubahan' => $request->no_akta_perubahan,
                'tanggal_akta_perubahan' => $request->masa_berlaku_perubahan,
                'no_spkum' => $request->no_spkk,
                'tanggal_spkum' => $request->tanggal_spkk,
                'no_siup' => $request->no_siup,
                'masa_berlaku_siup' => $request->masa_berlaku_siup,
                'no_sk_domisili' => $request->no_skdu,
                'masa_berlaku_sk_domisili' => $request->masa_berlaku_skdu,
                'no_npwp' => $request->no_npwp,
                'no_pkp' => $request->no_pkp,
                'no_sertifikat_koperasi' => $request->no_sertifikat,
                'image_logo' => $logoUrl,
                'image_npwp' => $npwpUrl,
                'doc_siup' => $dokumenSIUPUrl,
                'doc_akta_pendirian' => $dokumenAktaPendirianUrl,
                'doc_akta_perubahan' => $dokumenAktaPerubahanUrl,
                'doc_sk_kemenkumham' => $dokumenSKKUrl,
                'doc_spkum' => $dokumenSPKUMUrl,
                'doc_sk_domisili' => $dokumenSKDomisiliUrl,
                'doc_sertifikat_koperasi' => $dokumenSertifikatUrl,
            ];

            // Mendapatkan id koperasi
            $koperasiId = DB::table('tbl_koperasi')->where('id', $id_koperasi)->update($koperasiData);

            // Jika id koperasi tidak ditemukan
            if (!$koperasiId) {
                throw new \Exception('Gagal Tambah Koperasi!');
            }
            $pengurusData = array_slice($request->pengurusData, 1); // Memotong array data pengawas index 0
            $pengawasData = array_slice($request->pengawasData, 1); // Memotong array data pengawas index 0
            // Insert data pengurus
            $pengurus = DB::table('tbl_pengurus')->insert($pengurusData);
            // Insert data pengawas
            $pengawas = DB::table('tbl_pengawas')->insert($pengawasData);
            // $details = [
            //     'title' => 'Link Registrasi',
            //     'content' => 'Selamat! Akun koperasi anda berhasil terverifikasi',
            //     'info' => 'Berikut link untuk melengkapi data koperasi Anda pada tautan dibawah ini:',
            //     'link' => 'https://registrasiv2.rkicoop.co.id/registrasi/koperasi/',
            //     'logo_rki' => 'https://rkicoop.co.id/assets/imgs/Logo.png',
            //     'logo_background' => 'https://rkicoop.co.id/assets/imgs/pattern_3.svg',
            // ];

            // Mail::to($request->email)->send(new LinkMail($details));

            // Jika gagal insert pengurus dan pengawas
            if (!$pengurus || !$pengawas) {
                throw new \Exception('Gagal Tambah Anggota!');
            }
            // ====================================================================================================================================
            // Syntax Pengiriman OTP Zenziva
            // ====================================================================================================================================
            $userkey = 'edf78cfcaac1';
            $passkey = 'b4e14f4a4f695c1cd3f37259';
            $telepon = $request->pengurusData[0]['nomor_hp'];
            $message = "Selamat koperasi Anda berhasil terverifikasi. Berikut username dan password untuk login:\nusername: " . $username . "\npassword: " . $password;
            $url = 'https://console.zenziva.net/masking/api/sendsms/';
            $curlHandle = curl_init();
            curl_setopt($curlHandle, CURLOPT_URL, $url);
            curl_setopt($curlHandle, CURLOPT_HEADER, 0);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
            curl_setopt($curlHandle, CURLOPT_POST, 1);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
                'userkey' => $userkey,
                'passkey' => $passkey,
                'to' => $telepon,
                'message' => $message
            ));
            $results = json_decode(curl_exec($curlHandle), true);
            curl_close($curlHandle);
            // ====================================================================================================================================
            // End Pengiriman OTP
            // ====================================================================================================================================

            DB::commit();
            return response()->json([
                'response_code' => "00",
                'response_message' => 'Sukses Simpan Data',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 400);
        }
    }

    // Function untuk verifikasi otp koperasi
    public function verifikasi_otp($otp, $nis)
    {
        try {
            $koperasi = DB::table('tbl_koperasi')->join('tbl_pengurus', 'tbl_pengurus.id_koperasi', '=', 'tbl_koperasi.id')->where('nis', $nis)->where('otp', $otp)->where('approval', 0)->select('*', 'tbl_koperasi.id as id_koperasi')->first();
            if (!$koperasi) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Kode OTP Salah',
                ], 400);
            }
            return response()->json([
                'response_code' => "00",
                'response_message' => $koperasi,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }

    //Function untuk mengambil url dokumen-dokumen tiap-tiap koperasi
    public function data_koperasi($id)
    {
        try {
            $koperasi = DB::table('tbl_koperasi')->where('id', $id)->first();
            if (!$koperasi) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Koperasi Tidak Ditemukan!',
                ], 400);
            }
            $documents = [
                'logo' => $koperasi->image_logo ? $this->generateSignedUrlFromLink($koperasi->image_logo) : null,
                'npwp' => $koperasi->image_npwp ? $this->generateSignedUrlFromLink($koperasi->image_npwp) : null,
                'akta_pendirian' => $koperasi->doc_akta_pendirian ? $this->generateSignedUrlFromLink($koperasi->doc_akta_pendirian) : null,
                'akta_perubahan' => $koperasi->doc_akta_perubahan ? $this->generateSignedUrlFromLink($koperasi->doc_akta_perubahan) : null,
                'sk_kemenkumham' => $koperasi->doc_sk_kemenkumham ? $this->generateSignedUrlFromLink($koperasi->doc_sk_kemenkumham) : null,
                'spkum' => $koperasi->doc_spkum ? $this->generateSignedUrlFromLink($koperasi->doc_spkum) : null,
                'sk_domisili' => $koperasi->doc_sk_domisili ? $this->generateSignedUrlFromLink($koperasi->doc_sk_domisili) : null,
                'siup' => $koperasi->doc_siup ? $this->generateSignedUrlFromLink($koperasi->doc_siup) : null,
                'sertifikat' => $koperasi->doc_sertifikat_koperasi ? $this->generateSignedUrlFromLink($koperasi->doc_sertifikat_koperasi) : null,
            ];
            return response()->json([
                'response_code' => "00",
                'response_message' => $documents,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }

    // Function untuk insert koperasi puskop/primkop dari koperasi diatasnya
    public function insert_data_koperasi(Request $request, $id_koperasi, $id_tingkat)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'koperasiData' => 'required|array',
                'nis' => 'required',
            ]);

            // Melakukan perulangan data-data koperasi
            foreach ($request->koperasiData as $koperasi) {
                // Generate nis
                $nis = $request->nis . '-' . str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
                // Generate OTP
                $otp = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
                // Jika tingkatan koperasinya puskop
                if ($id_tingkat == '2') {
                    $koperasiData = [
                        'nama_koperasi' => $koperasi['nama_koperasi'],
                        'email_koperasi' => $koperasi['email_koperasi'],
                        'id_inkop' => $id_koperasi,
                        'id_tingkatan_koperasi' => $id_tingkat,
                        'nis' => $nis,
                        'otp' => $otp,
                    ];
                    // Jika tingkatan koperasinya primkop
                } else if ($id_tingkat == '3') {
                    $koperasiData = [
                        'nama_koperasi' => $koperasi['nama_koperasi'],
                        'email_koperasi' => $koperasi['email_koperasi'],
                        'id_puskop' => $id_koperasi,
                        'id_tingkatan_koperasi' => $id_tingkat,
                        'nis' => $nis,
                        'otp' => $otp,
                    ];
                }

                // $details = [
                //     'title' => 'Link Registrasi',
                //     'content' => 'Selamat! Akun koperasi anda berhasil terverifikasi',
                //     'info' => 'Berikut link untuk melengkapi data koperasi Anda pada tautan dibawah ini:',
                //     'link' => 'https://registrasiv2.rkicoop.co.id/registrasi/koperasi/',
                //     'logo_rki' => 'https://rkicoop.co.id/assets/imgs/Logo.png',
                //     'logo_background' => 'https://rkicoop.co.id/assets/imgs/pattern_3.svg',
                // ];

                // Mail::to($koperasi['email_koperasi'])->send(new LinkMail($details));
                // Insert data koperasi sekaligus mendapatkan id koperasinya
                $koperasiId = DB::table('tbl_koperasi')->insertGetId($koperasiData);

                // Jika insert gagal atau id koperasi tidak ditemukan
                if (!$koperasiId) {
                    throw new \Exception('Gagal Tambah Koperasi!');
                }

                // Menjadikan data ketua dalam sebuah array
                $pengurusData = [
                    'nama_pengurus' => $koperasi['nama_ketua'],
                    'nomor_hp' => $koperasi['nomor_ketua'],
                    'jabatan' => 'ketua',
                    'id_koperasi' => (int)$koperasiId,
                ];
                // Insert data ketua
                $pengurus = DB::table('tbl_pengurus')->insert($pengurusData);
                // Jika gagal insert pengurus ketua melempar pesan gagal
                if (!$pengurus) {
                    throw new \Exception('Gagal Tambah Ketua!');
                }

                // ====================================================================================================================================
                // Syntax Pengiriman OTP Zenziva
                // ====================================================================================================================================
                if ($id_tingkat == '2') {
                    $userkey = 'edf78cfcaac1';
                    $passkey = 'b4e14f4a4f695c1cd3f37259';
                    $telepon = $koperasi['nomor_ketua'];
                    $OTPmessage = 'Berikut OTP registrasi Anda: ' . $otp . "\nGunakan Link berikut untuk melanjutkan pendafataran https://registrasi.rkicoop.co.id/pendaftaran/puskop/" . $nis;
                    $url = 'https://console.zenziva.net/masking/api/sendOTP/';
                    $curlHandle = curl_init();
                    curl_setopt($curlHandle, CURLOPT_URL, $url);
                    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
                    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
                    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
                    curl_setopt($curlHandle, CURLOPT_POST, 1);
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
                        'userkey' => $userkey,
                        'passkey' => $passkey,
                        'to' => $telepon,
                        'message' => $OTPmessage
                    ));
                    $results = json_decode(curl_exec($curlHandle), true);
                    curl_close($curlHandle);
                    // Jika tingkatan koperasinya primkop
                } else if ($id_tingkat == '3') {
                    $userkey = 'edf78cfcaac1';
                    $passkey = 'b4e14f4a4f695c1cd3f37259';
                    $telepon = $koperasi['nomor_ketua'];
                    $OTPmessage = 'Berikut OTP registrasi Anda: ' . $otp . "\nGunakan Link berikut untuk melanjutkan pendafataran https://registrasi.rkicoop.co.id/pendaftaran/primkop/" . $nis;
                    $url = 'https://console.zenziva.net/masking/api/sendOTP/';
                    $curlHandle = curl_init();
                    curl_setopt($curlHandle, CURLOPT_URL, $url);
                    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
                    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
                    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
                    curl_setopt($curlHandle, CURLOPT_POST, 1);
                    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
                        'userkey' => $userkey,
                        'passkey' => $passkey,
                        'to' => $telepon,
                        'message' => $OTPmessage
                    ));
                    $results = json_decode(curl_exec($curlHandle), true);
                    curl_close($curlHandle);
                }

                // ====================================================================================================================================
                // End Pengiriman OTP
                // ====================================================================================================================================

            }

            DB::commit();

            return response()->json([
                'response_code' => "00",
                'response_message' => "Data koperasi berhasil ditambahkan",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }

    // Function menambahkan inkop dari RKI
    public function insert_inkop(Request $request)
    {

        DB::beginTransaction();

        try {
            $request->validate([
                'namaKoperasi' => 'required',
                'nomerKetua' => 'required',
                'namaKetua' => 'required',
                'email' => 'required',
            ]);
            $nis = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
            $otp = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $koperasiData = [
                'nama_koperasi' => $request->namaKoperasi,
                'id_tingkatan_koperasi' => 1,
                'email_koperasi' => $request->email,
                'nis' => $nis,
                'otp' => $otp,
            ];
            // $details = [
            //     'title' => 'Link Registrasi',
            //     'content' => 'Selamat! Akun koperasi anda berhasil terverifikasi',
            //     'info' => 'Berikut link untuk melengkapi data koperasi Anda pada tautan dibawah ini:',
            //     'link' => 'https://registrasiv2.rkicoop.co.id/registrasi/koperasi/',
            //     'logo_rki' => 'https://rkicoop.co.id/assets/imgs/Logo.png',
            //     'logo_background' => 'https://rkicoop.co.id/assets/imgs/pattern_3.svg',
            // ];
            // Mail::to($request->email)->send(new LinkMail($details));

            // ====================================================================================================================================
            // Syntax Pengiriman OTP Zenziva
            // ====================================================================================================================================
            $userkey = 'edf78cfcaac1';
            $passkey = 'b4e14f4a4f695c1cd3f37259';
            $telepon =  $request->nomerKetua;
            $OTPmessage = 'Berikut OTP registrasi Anda: ' . $otp . "\nGunakan Link berikut untuk melanjutkan pendafataran https://registrasi.rkicoop.co.id/pendaftaran/inkop/" . $nis;
            $url = 'https://console.zenziva.net/masking/api/sendOTP/';
            $curlHandle = curl_init();
            curl_setopt($curlHandle, CURLOPT_URL, $url);
            curl_setopt($curlHandle, CURLOPT_HEADER, 0);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
            curl_setopt($curlHandle, CURLOPT_POST, 1);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
                'userkey' => $userkey,
                'passkey' => $passkey,
                'to' => $telepon,
                'message' => $OTPmessage
            ));
            $results = json_decode(curl_exec($curlHandle), true);
            curl_close($curlHandle);
            // ====================================================================================================================================
            // End Pengiriman OTP
            // ====================================================================================================================================

            $koperasiId = DB::table('tbl_koperasi')->insertGetId($koperasiData);
            if (!$koperasiId) {
                throw new \Exception('Gagal Tambah Koperasi!');
            }
            $pengurusData = [
                'nama_pengurus' => $request->namaKetua,
                'nomor_hp' => $request->nomerKetua,
                'jabatan' => 'ketua',
                'id_koperasi' => (int)$koperasiId,
            ];

            $pengurus = DB::table('tbl_pengurus')->insert($pengurusData);

            if (!$pengurus) {
                throw new \Exception('Gagal Tambah Ketua!');
            }
            DB::commit();

            return response()->json([
                'response_code' => "00",
                'response_message' => 'Sukses simpan data!',
                'results' => $results
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }

    public function dashboard()
    {

        $id = Session::get('id_koperasi');
        if (!empty($id)) {
            $username = Session::get('username');
            $password = Session::get('password');
            $tingkatan = Session::get('tingkatan');
            $id_inkop = Session::get('id_inkop');
            $id_puskop = Session::get('id_puskop');
            $id_primkop = Session::get('id_primkop');
            $inkop_count = DB::table('tbl_koperasi')->where('id_tingkatan_koperasi', '=', 1)->count();
            $puskop_count = DB::table('tbl_koperasi')->where('id_tingkatan_koperasi', '!=', 3)->count();
            $primkop_count = DB::table('tbl_koperasi')->where('id_tingkatan_koperasi', '!=', 2)->count();
            $anggota_count = DB::table('tbl_anggota')->where('id_koperasi', $id)->count();
            $koperasi = DB::table('tbl_koperasi')->where('id', $id)->first();
            // return dd($koperasi);
            return view('dashboard.overview.index', compact('id', 'username', 'password', 'tingkatan', 'inkop_count', 'puskop_count', 'primkop_count', 'anggota_count', 'koperasi'));
        } else {
            return redirect('/login');
        }
    }

    public function list_inkop()
    {

        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $list_inkop =  DB::table('tbl_koperasi')->where('id_tingkatan_koperasi', '=', 1)->get();
        return view('dashboard.data.koperasi.inkop.index', compact('id', 'username', 'password', 'tingkatan', 'list_inkop'));
    }

    public function list_puskop()
    {

        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        if ($tingkatan == 'rki') {
            $puskop = DB::table('tbl_koperasi')->where('id_tingkatan_koperasi', '=', 2)->get();
        } else {
            $puskop = DB::table('tbl_koperasi')->where('id_inkop',  $id)->get();
        }
        return view('dashboard.data.koperasi.puskop.index', compact('id', 'username', 'password', 'tingkatan', 'puskop'));
    }

    public function list_puskop_inkop(String $id)
    {

        // return dd($id);
        $id_ink = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $puskop = DB::table('tbl_koperasi')->where('id_inkop',  $id)->where('approval', '=', 1)->get();
        return view('dashboard.data.koperasi.puskop.index', compact('id_ink', 'username', 'password', 'tingkatan', 'puskop'));
    }


    public function list_primkop_puskop(String $id)
    {

        $id_pus = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        // return dd($tingkatan);

        $primkop = DB::table('tbl_koperasi')->where('id_puskop', $id)->where('approval', '=', 1)->get();
        return view('dashboard.data.koperasi.primkop.index', compact('id_pus', 'username', 'password', 'tingkatan', 'primkop'));
    }

    public function list_primkop()
    {

        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        // return dd($tingkatan);
        if ($tingkatan == 'rki') {
            $primkop = DB::table('tbl_koperasi')->where('id_tingkatan_koperasi', '=', 3)->get();
            // return dd($primkop);
        } else {
            $primkop = DB::table('tbl_koperasi')->where('id_puskop', $id)->get();
        }
        return view('dashboard.data.koperasi.primkop.index', compact('id', 'username', 'password', 'tingkatan', 'primkop'));
    }

    public function primkop()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $koperasi = DB::table('tbl_koperasi')->where('id', $id)->first();
        // return dd($koperasi);
        return view('dashboard.data.koperasi.primkop.create', compact('id', 'username', 'password', 'tingkatan', 'koperasi'));
    }

    public function puskop()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $koperasi = DB::table('tbl_koperasi')->where('id', $id)->first();
        // return dd($koperasi);
        return view('dashboard.data.koperasi.puskop.create', compact('id', 'username', 'password', 'tingkatan', 'koperasi'));
    }

    public function inkop()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        return view('dashboard.data.koperasi.inkop.create', compact('id', 'username', 'password', 'tingkatan'));
    }

    public function pinjaman()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $list_pinjaman =  DB::table('tbl_pinjaman')->where('id_koperasi', '=', $id)->get();
        return view('dashboard.data.koperasi.simpin.pinjaman', compact('id', 'username', 'password', 'tingkatan', 'list_pinjaman'));
    }

    public function simpanan()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $list_simpanan =  DB::table('tbl_simpanan')->where('id_koperasi', '=', $id)->get();
        return view('dashboard.data.koperasi.simpin.simpanan', compact('id', 'username', 'password', 'tingkatan', 'list_simpanan'));
    }
    public function setting()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $koperasi =  DB::table('tbl_koperasi')->where('id', '=', $id)->first();
        // return dd($koperasi);
        return view('dashboard.data.koperasi.setting.index', compact('id', 'username', 'password', 'tingkatan', 'koperasi'));
    }
    public function ubah_password()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        // return dd($koperasi);
        return view('dashboard.data.koperasi.ubah_password.index', compact('id', 'username', 'password', 'tingkatan'));
    }
    public function tambah_simpanan()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $id_koperasi = $id;
        return view('dashboard.data.koperasi.simpin.tambah_simpanan', compact('id', 'username', 'password', 'tingkatan', 'id_koperasi'));
    }


    public function insert_simpanan(Request $request)
    {

        DB::beginTransaction();

        try {
            $request->validate([
                'simpanan_pokok' => 'required',
                'id_koperasi' => 'required',
                'no_anggota' => 'required',
                'simpanan_wajib' => 'required',
                'simpanan_sukarela' => 'required',
                'keterangan' => 'required',
                'tanggal_simpanan' => 'required'
            ]);

            $simpananData = [
                'simpanan_pokok' => $request->simpanan_pokok,
                'id_koperasi' => $request->id_koperasi,
                'no_anggota' => $request->no_anggota,
                'simpanan_wajib' => $request->simpanan_wajib,
                'simpanan_sukarela' => $request->simpanan_sukarela,
                'keterangan' => $request->keterangan,
                'tanggal_simpanan' => $request->tanggal_simpanan
            ];
            // Insert into tbl_anggota
            $insert_simpanan = DB::table('tbl_simpanan')->insert($simpananData);
            if (!$insert_simpanan) {
                throw new \Exception('Gagal Tambah Simpanan!');
            }
            DB::commit();
            return response()->json([
                'response_code' => "00",
                'response_message' => 'Sukses simpan data!',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 400);
        }
    }

    public function logout()
    {

        Session::flush('id_koperasi');
        Session::flush('username');
        Session::flush('password');
        Session::flush('tingkatan');
        Session::flush('id_inkop');
        Session::flush('id_puskop');
        Session::flush('id_primkop');
        return redirect('/login');
    }
}
