<?php

namespace App\Services;

use Google\Cloud\Storage\StorageClient;
use Exception;

class GoogleCloudStorageService
{
    protected $storageClient;
    protected $bucket;

    public function __construct()
    {
        try {
            // Inisialisasi StorageClient
            $this->storageClient = new StorageClient([
                'projectId' => env('GOOGLE_CLOUD_PROJECT_ID'),
                'keyFilePath' => base_path('google-bucket.json'),
            ]);

            // Ambil bucket yang dikonfigurasi
            $this->bucket = $this->storageClient->bucket(env('GOOGLE_CLOUD_STORAGE_BUCKET'));
        } catch (Exception $e) {
            throw new Exception("Failed to initialize Google Cloud Storage: " . $e->getMessage());
        }
    }

    // Fungsi untuk upload file ke bucket
    public function uploadFile($filePath, $destination)
    {
        try {
            // Buka file
            $file = fopen($filePath, 'r');

            if (!$file) {
                throw new Exception("Failed to open file: " . $filePath);
            }

            // Upload file ke bucket dengan nama tujuan
            $object = $this->bucket->upload($file, [
                'name' => $destination, // Menyimpan file di bucket dengan path spesifik
            ]);

            // Tutup file handler jika dibuka dengan benar
            if (is_resource($file)) {
                fclose($file);
            }

            // Kembalikan informasi file yang diupload
            return $object->info();

        } catch (Exception $e) {
            throw new Exception("File upload failed: " . $e->getMessage());
        }
    }

    // Fungsi untuk download file dari bucket
    public function downloadFile($fileName, $destination)
    {
        try {
            $object = $this->bucket->object($fileName);

            // Periksa apakah file ada di bucket
            if (!$object->exists()) {
                throw new Exception("File does not exist in bucket: " . $fileName);
            }

            // Download file dari bucket ke lokasi tujuan
            $object->downloadToFile($destination);
            return true;
        } catch (Exception $e) {
            throw new Exception("File download failed: " . $e->getMessage());
        }
    }

    // Fungsi untuk menghapus file dari bucket
    public function deleteFile($fileName)
    {
        try {
            $object = $this->bucket->object($fileName);

            // Periksa apakah file ada sebelum dihapus
            if (!$object->exists()) {
                throw new Exception("File does not exist in bucket: " . $fileName);
            }

            // Hapus file dari bucket
            $object->delete();
            return true;
        } catch (Exception $e) {
            throw new Exception("File deletion failed: " . $e->getMessage());
        }
    }

    // Fungsi untuk generate Signed URL
    public function generateSignedUrl($fileName, $expirationTime = '+1 hour')
    {
        try {
            $object = $this->bucket->object($fileName);

            // Periksa apakah file ada di bucket
            if (!$object->exists()) {
                throw new Exception("File does not exist in bucket: " . $fileName);
            }

            // Buat signed URL yang berlaku untuk durasi yang ditentukan
            $signedUrl = $object->signedUrl(
                new \DateTime($expirationTime), // Expiration time
                [
                    'version' => 'v4', // Menggunakan Signed URL versi 4
                ]
            );

            // Kembalikan URL yang dapat digunakan untuk akses sementara
            return $signedUrl;

        } catch (Exception $e) {
            throw new Exception("Failed to generate signed URL: " . $e->getMessage());
        }
    }
}
