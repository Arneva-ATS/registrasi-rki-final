<?php

namespace App\Services;

use Google\Cloud\Storage\StorageClient;

class GoogleCloudStorageService
{
    protected $storageClient;
    protected $bucket;

    public function __construct()
    {
        // Inisialisasi StorageClient
        $this->storageClient = new StorageClient([
            'projectId' => env('GOOGLE_CLOUD_PROJECT_ID'),
            'keyFilePath' => base_path('registrasi.json'),
        ]);

        // Ambil bucket yang dikonfigurasi
        $this->bucket = $this->storageClient->bucket(env('GOOGLE_CLOUD_STORAGE_BUCKET'));
    }

    // Fungsi untuk upload file ke bucket
    public function uploadFile($filePath, $fileName)
    {
        $file = fopen($filePath, 'r');
        $object = $this->bucket->upload($file, [
            'name' => $fileName,
        ]);

        return $object->info();
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
