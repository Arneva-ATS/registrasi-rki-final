<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleCloudStorageService;

class BucketController extends Controller
{
    //
    protected $storageService;
    protected $bucket;

    public function __construct(GoogleCloudStorageService $storageService)
    {
        $this->storageService = $storageService;
    }

    public function upload(Request $request)
    {
        // Validasi input

        $request->validate([
            'file' => 'required|file',
        ]);

        // Ambil file dari request
        $file = $request->file('file');
        $filePath = $file->getPathName();
        $fileExtension = $file->getClientOriginalExtension();

        // Generate nama file yang unik
        $fileName = time() . '.' . $fileExtension;

        // Tentukan folder di bucket (misalnya: /koperasi/logo/)
        if($request->jenis == 'logo'){
            $folder = 'koperasi/logo/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/logo/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        } else if($request->jenis=='npwp'){
            $folder = 'koperasi/npwp/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/npwp/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }  else if($request->jenis=='akta_pendirian'){
            $folder = 'koperasi/akta_pendirian/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/akta_pendirian/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        } else if($request->jenis=='akta_perubahan'){
            $folder = 'koperasi/akta_perubahan/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/akta_perubahan/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }else if($request->jenis=='skk'){
            $folder = 'koperasi/sk_kemenkumham/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/skk/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }else if($request->jenis=='siup'){
            $folder = 'koperasi/siup/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/siup/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }else if($request->jenis=='spkk'){
            $folder = 'koperasi/spkum/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/spkum/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }else if($request->jenis=='skdu'){
            $folder = 'koperasi/sk_domisili/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/skdu/123456789.jpg

            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }else if($request->jenis=='sertifikat'){
            $folder = 'koperasi/sertifikat_koperasi/';
            $fileWithPath = $folder . $fileName; // Path di bucket, contoh: koperasi/sertifikat_koperasi/123456789.jpg
            // Upload file ke Google Cloud Storage
            $result = $this->storageService->uploadFile($filePath, $fileWithPath);
        }

        return response()->json([
            'message' => 'File uploaded successfully',
            'data' => $result,
        ]);
    }

    // Fungsi untuk download file dari bucket
    public function downloadFile($fileName, $destination)
    {
        $object = $this->bucket->object($fileName);
        $object->downloadToFile($destination);
    }

    // Fungsi untuk menghapus file dari bucket
    public function deleteFile($fileName)
    {
        $object = $this->bucket->object($fileName);
        $object->delete();
    }
}
