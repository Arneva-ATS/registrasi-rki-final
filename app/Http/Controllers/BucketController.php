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

        $file = $request->file('file');
        $filePath = $file->getPathName();
        $fileName = $file->getClientOriginalName();

        // Upload file ke Google Cloud Storage
        $result = $this->storageService->uploadFile($filePath, $fileName);

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
