<?php

namespace App\Http\Controllers;

use App\Mail\LinkMail;
use App\Services\GoogleCloudStorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Throwable;
use Illuminate\Support\Facades\Session;

class AnggotaController extends Controller
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

    //
    // public function insert_anggota(Request $request)
    // {
    //     DB::beginTransaction();

    //     try {
    //         $request->validate([
    //             'no_anggota' => 'required',
    //             'username' => 'required',
    //             'nama_lengkap' => 'required',
    //             'password' => 'required',
    //             'confirmPassword' => 'required',
    //             'email' => 'required',
    //             'nis' => 'required',
    //             'nomor_hp' => 'required',
    //             'id_koperasi' => 'required'
    //         ]);
    //         if ($request->password != $request->confirmPassword) {
    //             return response()->json([
    //                 'response_code' => "01",
    //                 'response_message' => 'Password Tidak Sama!',
    //             ], 200);
    //         }
    //         $nis = $request->nis . '-' . str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
    //         $anggotaData = [
    //             'no_anggota' => $request->no_anggota,
    //             'username' => $request->username,
    //             'nama_lengkap' => $request->nama_lengkap,
    //             'password' => $request->password,
    //             'nomor_hp' => $request->nomor_hp,
    //             'nis' => $nis,
    //             'jabatan' => 'anggota',
    //             'id_koperasi' => $request->id_koperasi,
    //         ];

    //         // Insert into tbl_anggota
    //         $insert_anggota = DB::table('tbl_anggota')->insertGetId($anggotaData);
    //         if (!$insert_anggota) {
    //             return response()->json([
    //                 'response_code' => "01",
    //                 'response_message' => 'Gagal Tambah Anggota!',
    //             ], 400);
    //         }
    //         $details = [
    //             'title' => 'Link Registrasi',
    //             'content' => 'Selamat! Akun anggota anda berhasil terverifikasi',
    //             'info' => 'Berikut link untuk melengkapi data anggota Anda pada tautan dibawah ini:',
    //             'link' => 'https://registrasiv2.rkicoop.co.id/pendaftaran/anggota/primkop/',
    //             'logo_rki' => 'https://rkicoop.co.id/assets/imgs/Logo.png',
    //             'logo_background' => 'https://rkicoop.co.id/assets/imgs/pattern_3.svg',
    //         ];
    //         Mail::to($request->email)->send(new LinkMail($details));

    //         DB::commit();
    //         return response()->json([
    //             'response_code' => "00",
    //             'response_message' => 'Sukses simpan data!',
    //         ], 200);
    //     } catch (\Throwable $th) {
    //         DB::rollBack();
    //         return response()->json([
    //             'response_code' => "01",
    //             'response_message' => $th->getMessage(),
    //         ], 500);
    //     }
    // }
    public function insert_data_anggota(Request $request, $id_koperasi)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'anggotaData' => 'required|array',
                'nis' => 'required',
            ]);


            foreach ($request->anggotaData as $anggota) {
                $nis = $request->nis . '-' . str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
                $otp = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
                $anggotaData = [
                    'nama_lengkap' => $anggota['nama_anggota'],
                    'email' => $anggota['email'],
                    'nomor_hp' => $anggota['nomor_hp'],
                    'no_anggota' => $anggota['no_anggota'],
                    'id_koperasi' => $id_koperasi,
                    'nis' => $nis,
                    'otp' => $otp,
                ];
                // ====================================================================================================================================
                // Syntax Pengiriman OTP Zenziva
                // ====================================================================================================================================
                $userkey = 'edf78cfcaac1';
                $passkey = 'b4e14f4a4f695c1cd3f37259';
                $telepon =  $anggota['nomor_hp'];
                $OTPmessage = 'Mohon jaga kerahasiaan kode OTP Anda. Berikut OTP registrasi: ' . $otp . "\nGunakan link berikut ini untuk melanjutkan pendafataran https://registrasi.rkicoop.co.id/pendaftaran/anggota/" . $nis;
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

                // $details = [
                //     'title' => 'Link Registrasi',
                //     'content' => 'Selamat! Akun koperasi anda berhasil terverifikasi',
                //     'info' => 'Berikut link untuk melengkapi data koperasi Anda pada tautan dibawah ini:',
                //     'link' => 'https://registrasiv2.rkicoop.co.id/registrasi/koperasi/',
                //     'logo_rki' => 'https://rkicoop.co.id/assets/imgs/Logo.png',
                //     'logo_background' => 'https://rkicoop.co.id/assets/imgs/pattern_3.svg',
                // ];

                // Mail::to($anggota['email'])->send(new LinkMail($details));
                $anggotaId = DB::table('tbl_anggota')->insertGetId($anggotaData);
                if (!$anggotaId) {
                    throw new \Exception('Gagal Tambah Anggota!');
                }
            }

            DB::commit();

            return response()->json([
                'response_code' => "00",
                'response_message' => "Data anggota berhasil ditambahkan",
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }
    public function verifikasi_otp($otp, $nis)
    {
        try {
            $anggota = DB::table('tbl_anggota')->where('nis', $nis)->where('otp', $otp)->where('approval', 0)->first();
            if (!$anggota) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Kode OTP Salah',
                ], 400);
            }
            return response()->json([
                'response_code' => "00",
                'response_message' => $anggota,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }

    //Function untuk mengambil url dokumen-dokumen tiap-tiap koperasi
    public function data_anggota($id)
    {
        try {
            $koperasi = DB::table('tbl_anggota')->where('id', $id)->first();
            if (!$koperasi) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Data Anggota Tidak Ditemukan!',
                ], 400);
            }
            $documents = [
                'selfie' => $koperasi->selfie ? $this->generateSignedUrlFromLink($koperasi->selfie) : null,
                'ktp' => $koperasi->ktp ? $this->generateSignedUrlFromLink($koperasi->ktp) : null,
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

    public function update_insert_anggota(Request $request, $id_anggota)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'no_anggota' => 'required',
                'nis' => 'required',
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required',
                'anggotaKeluarga' => 'required|array',
                // 'pendidikanData' => 'required|array',
                // 'pekerjaanData' => 'required|array',`
                'selfie' => 'required',
                'ktp' => 'required',
                'kelurahan' => 'required',
                'kecamatan' => 'required',
                'kota' => 'required',
                'provinsi' => 'required',
                'pendidikan_terakhir' => 'required',
                'kode_pos' => 'required',
                'agama' => 'required',
                'status_pernikahan' => 'required',
                'pekerjaan' => 'required',
                'kewarganegaraan' => 'required',
                'alamat' => 'required',
                'nomor_hp' => 'required',
                'email' => 'required|email',
            ]);

            // simpan url
            $selfieUrl = $request->selfie;
            $ktpUrl = $request->ktp;
            $nama_lengkap = explode(' ', $request->nama_lengkap);
            $dua_kata_pertama = implode(' ', array_slice($nama_lengkap, 0, 2));
            $username = $dua_kata_pertama  . str_pad(rand(0, 2), 2, '0', STR_PAD_LEFT);
            $password = bin2hex(openssl_random_pseudo_bytes(10));

            $anggotaData = [
                'no_anggota' => $request->no_anggota,
                'nik' => $request->nik,
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'id_kelurahan' => $request->kelurahan,
                'id_kecamatan' => $request->kecamatan,
                'id_kota' => $request->kota,
                'id_provinsi' => $request->provinsi,
                'kode_pos' => $request->kode_pos,
                'agama' => $request->agama,
                'status_pernikahan' => $request->status_pernikahan,
                'pekerjaan' => $request->pekerjaan,
                'kewarganegaraan' => $request->kewarganegaraan,
                'alamat' => $request->alamat,
                'nomor_hp' => $request->nomor_hp,
                'pendidikan_terakhir' => $request->pendidikan_terakhir,
                'email' => $request->email,
                'nama_pasangan' => $request->nama_pasangan,
                'usia_pasangan' => $request->usia_pasangan,
                'pekerjaan_pasangan' => $request->pekerjaan_pasangan,
                'pendidikan_pasangan' => $request->pendidikan_pasangan,
                'selfie' => $selfieUrl,
                'ktp' => $ktpUrl,
                'approval' => 1,
                'otp' => null,
            ];
            // Insert into tbl_anggota
            $update_anggota = DB::table('tbl_anggota')->where('id', $id_anggota)->update($anggotaData);
            if (!$update_anggota) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Gagal simpan data anggota!',
                ], 400);
            }
            $anggotaKeluarga = $request->anggotaKeluarga;
            foreach ($anggotaKeluarga as &$keluarga) {
                $keluarga['id_anggota'] = $id_anggota;
            }
            $pendidikanData = $request->pendidikanData;
            foreach ($pendidikanData as &$pendidikan) {
                $pendidikan['id_anggota'] = $id_anggota;
            }
            $pekerjaanData = $request->pekerjaanData;
            foreach ($pekerjaanData as &$pekerjaan) {
                $pekerjaan['id_anggota'] = $id_anggota;
            }

            $insert_anggota_keluarga = DB::table('tbl_keluarga_anggota')->insert($anggotaKeluarga);
            if (!$insert_anggota_keluarga) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Gagal simpan data keluarga!',
                ], 400);
            }

            $insert_pendidikan = DB::table('tbl_pendidikan_anggota')->insert($pendidikanData);
            if (!$insert_pendidikan) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Gagal simpan data pendidikan!',
                ], 400);
            }
            $insert_pekerjaan = DB::table('tbl_riwayat_pekerjaan')->insert($pekerjaanData);
            if (!$insert_pekerjaan) {
                return response()->json([
                    'response_code' => "01",
                    'response_message' => 'Gagal simpan data Pekerjaan!',
                ], 400);
            }
            // ====================================================================================================================================
            // Syntax Pengiriman OTP Zenziva
            // ====================================================================================================================================
            $userkey = 'edf78cfcaac1';
            $passkey = 'b4e14f4a4f695c1cd3f37259';
            $telepon =  $request->nomor_hp;
            $message = "Selamat data keanggotan Anda berhasil terverifikasi. Berikut username dan password untuk login:\nusername: " . $username . "\npassword: " . $password;
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
                'response_message' => 'Sukses simpan data!',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response_code' => "01",
                'response_message' => $th->getMessage(),
            ], 500);
        }
    }

    public function create()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $koperasi = Session::get('nama_koperasi');
        $nama_koperasi = $koperasi;
        $id_koperasi = $id;
        $koperasi = DB::table('tbl_koperasi')->where('id', $id)->first();
        return view('dashboard.data.koperasi.anggota.create', compact('id', 'username', 'password', 'tingkatan', 'id_koperasi', 'nama_koperasi', 'koperasi'));
    }
    public function show($no_anggota, $koperasi_id)
    {
        try {
            $id = Session::get('id_koperasi');
            $username = Session::get('username');
            $password = Session::get('password');
            $tingkatan = Session::get('tingkatan');
            $id_inkop = Session::get('id_inkop');
            $id_puskop = Session::get('id_puskop');
            $id_primkop = Session::get('id_primkop');
            $koperasi = Session::get('nama_koperasi');
            $nama_koperasi = $koperasi;
            $id_koperasi = $id;
            $list_anggota = DB::table('tbl_anggota')->where('no_anggota', $no_anggota)->where('id_koperasi', $koperasi_id)->first();
            if (!$list_anggota) {
                throw new \Exception('Tidak ditemukan data');
            }
            return response()->json(['response_code' => '00', 'response_message' => $list_anggota], 200);
        } catch (\Throwable $th) {
            return response()->json(['response_code' => '01', 'response_message' => $th->getMessage()], 500);
        }
    }

    // public function update_anggota(Request $request, $id)
    // {
    //     DB::beginTransaction();

    //     try {
    //         $request->validate([
    //             'no_anggota' => 'required',
    //             'nik' => 'required',
    //             'nama_lengkap' => 'required',
    //             'tempat_lahir' => 'required',
    //             'username' => 'required',
    //             'tanggal_lahir' => 'required|date',
    //             'jenis_kelamin' => 'required',
    //             'kelurahan' => 'required',
    //             'kecamatan' => 'required',
    //             'kota' => 'required',
    //             'provinsi' => 'required',
    //             'kode_pos' => 'required',
    //             'agama' => 'required',
    //             'status_pernikahan' => 'required',
    //             'pekerjaan' => 'required',
    //             'kewarganegaraan' => 'required',
    //             'alamat' => 'required',
    //             'nomor_hp' => 'required',
    //             'email' => 'required|email',
    //             'slug_url' => 'required',
    //             'id_role' => 'required',
    //             'id_koperasi' => 'required'
    //         ]);

    //         // Convert Base64 to Image
    //         // Simpan foto selfie
    //         $selfie_base64 = $request->selfie;
    //         $selfie_extension = 'png';
    //         $selfie_name = time() . 'anggota.' . $selfie_extension;
    //         $selfie_folder = '/anggota/selfie/';
    //         $selfie_path = public_path() . $selfie_folder . $selfie_name;
    //         // $logo_path = public_path().'/images' public_path($logo_folder . $logo_name);
    //         file_put_contents($selfie_path, base64_decode($selfie_base64));

    //         // Simpan foto selfie
    //         $ktp_base64 = $request->ktp;
    //         $ktp_extension = 'png';
    //         $ktp_name = time() . 'anggota.' . $ktp_extension;
    //         $ktp_folder = '/anggota/ktp/';
    //         $ktp_path = public_path() . $ktp_folder . $ktp_name;
    //         // $logo_path = public_path().'/images' public_path($logo_folder . $logo_name);
    //         file_put_contents($ktp_path, base64_decode($ktp_base64));

    //         // simpan url
    //         $selfieUrl = $selfie_folder . $selfie_name;
    //         $ktpUrl = $ktp_folder . $ktp_name;
    //         $anggotaData = [
    //             'no_anggota' => $request->no_anggota,
    //             'nik' => $request->nik,
    //             'nama_lengkap' => $request->nama_lengkap,
    //             'username' => $request->username,
    //             'tempat_lahir' => $request->tempat_lahir,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'id_kelurahan' => $request->kelurahan,
    //             'id_kecamatan' => $request->kecamatan,
    //             'id_kota' => $request->kota,
    //             'id_provinsi' => $request->provinsi,
    //             'kode_pos' => $request->kode_pos,
    //             'agama' => $request->agama,
    //             'status_pernikahan' => $request->status_pernikahan,
    //             'pekerjaan' => $request->pekerjaan,
    //             'kewarganegaraan' => $request->kewarganegaraan,
    //             'alamat' => $request->alamat,
    //             'nomor_hp' => $request->nomor_hp,
    //             'email' => $request->email,
    //             'selfie' => $selfieUrl,
    //             'ktp' => $ktpUrl,
    //             'id_koperasi' => $request->id_koperasi,
    //             'id_role' => $request->id_role
    //         ];
    //         // Insert into tbl_anggota
    //         $update_anggota = DB::table('tbl_anggota')->where('id', $id)->update($anggotaData);
    //         if (!$update_anggota) {
    //             throw new \Exception('Gagal Update Anggota!');
    //         }
    //         DB::commit();
    //         return response()->json([
    //             'response_code' => "00",
    //             'response_message' => 'Sukses update data!',
    //         ], 200);
    //     } catch (\Throwable $th) {
    //         DB::rollBack();
    //         return response()->json([
    //             'response_code' => "01",
    //             'response_message' => $th->getMessage(),
    //         ], 400);
    //     }
    // }

    public function list_anggota()
    {
        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $primkop_anggota = DB::table('tbl_anggota')->where('id_koperasi', $id)->get();
        return view('dashboard.data.koperasi.anggota.index', compact('id', 'username', 'password', 'tingkatan', 'primkop_anggota'));
    }


    public function list_anggota_primkop(String $id)
    {
        $id_prim = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');
        $id_inkop = Session::get('id_inkop');
        $id_puskop = Session::get('id_puskop');
        $id_primkop = Session::get('id_primkop');
        $primkop_anggota = DB::table('tbl_anggota')->where('id_koperasi', $id)->where('approval', '=', 1)->get();
        return view('dashboard.data.koperasi.anggota.index', compact('id_prim', 'username', 'password', 'tingkatan', 'primkop_anggota'));
    }

    public function list_pengajuan()
    {

        $id = Session::get('id_koperasi');
        $username = Session::get('username');
        $password = Session::get('password');
        $tingkatan = Session::get('tingkatan');

        $list_pengajuan =  DB::table('tbl_pengajuan')->get();
        return view('dashboard.data.pengajuan.index', compact('id', 'username', 'password', 'tingkatan', 'list_pengajuan'));
    }
}
