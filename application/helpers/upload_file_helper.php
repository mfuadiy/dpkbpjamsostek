<?php

defined('BASEPATH') or exit('No direct script access allowed');

// if (!function_exists('upload_file')) {
//     function upload_file($input_name, $npk, $prefix, $upload_path)
//     {
//         $CI = &get_instance(); // Ambil instance CodeIgniter

//         if (!empty($_FILES[$input_name]['name'])) {
//             // Ambil ekstensi file
//             $ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);

//             // Format nama file: prefix_npk_timestamp.extension
//             $new_filename = "{$prefix}_{$npk}_" . time() . ".{$ext}";

//             // Konfigurasi upload
//             $config = [
//                 'upload_path'   => $upload_path, // Path spesifik untuk file ini
//                 'allowed_types' => 'jpg|jpeg|png|pdf', // Jenis file yang diizinkan
//                 'file_name'     => $new_filename, // Format nama file
//                 'max_size'      => 20480 // Ukuran maksimal file (2MB)
//             ];

//             // Load library upload
//             $CI->load->library('upload', $config);

//             // Inisialisasi ulang konfigurasi upload
//             $CI->upload->initialize($config);

//             // Proses upload
//             if ($CI->upload->do_upload($input_name)) {
//                 return $new_filename; // Kembalikan nama file jika berhasil
//             } else {
//                 return null; // Kembalikan null jika gagal
//             }
//         }
//         return null; // Kembalikan null jika tidak ada file yang diunggah
//     }
// }

if (!function_exists('upload_file')) {
    function upload_file($input_name, $npk, $prefix, $upload_path)
    {
        $CI = &get_instance();

        if (!empty($_FILES[$input_name]['name'])) {
            // Ambil ekstensi file
            $ext = strtolower(pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION));

            // Format nama file baru
            $new_filename = "{$prefix}_{$npk}_" . time() . ".{$ext}";

            // Konfigurasi upload
            $config = [
                'upload_path'   => $upload_path,
                'allowed_types' => 'jpg|jpeg|png',
                'file_name'     => $new_filename,
                'max_size'      => 20480 // Maksimal 20MB
            ];

            // Load library upload
            $CI->load->library('upload', $config);
            $CI->upload->initialize($config);

            // Proses upload
            if ($CI->upload->do_upload($input_name)) {
                $uploaded_data = $CI->upload->data(); // Data file yang diunggah

                // Jika file adalah gambar, lakukan koreksi orientasi & kompresi
                if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                    fix_image_orientation($uploaded_data['full_path']); // Koreksi rotasi
                    compress_image_gd($uploaded_data['full_path'], $uploaded_data['file_type']); // Kompresi
                }

                return $new_filename;
            } else {
                return null;
            }
        }
        return null;
    }

    /**
     * 🔄 Fungsi untuk memperbaiki rotasi gambar sesuai metadata Exif
     */
    function fix_image_orientation($file_path)
    {
        if (function_exists('exif_read_data')) {
            $exif = @exif_read_data($file_path);
            if ($exif !== false && isset($exif['Orientation'])) {
                $image = imagecreatefromjpeg($file_path);
                switch ($exif['Orientation']) {
                    case 3:
                        $image = imagerotate($image, 180, 0); // Rotasi 180 derajat
                        break;
                    case 6:
                        $image = imagerotate($image, -90, 0); // Rotasi 90 derajat ke kanan
                        break;
                    case 8:
                        $image = imagerotate($image, 90, 0); // Rotasi 90 derajat ke kiri
                        break;
                }
                imagejpeg($image, $file_path, 100); // Simpan ulang dengan rotasi yang benar
                imagedestroy($image);
            }
        }
    }

    /**
     * 🔧 Fungsi untuk mengompresi gambar menggunakan GD Library
     */
    function compress_image_gd($source_path, $file_type)
    {
        if ($file_type == "image/jpeg" || $file_type == "image/jpg") {
            $image = imagecreatefromjpeg($source_path);
        } elseif ($file_type == "image/png") {
            $image = imagecreatefrompng($source_path);
        } else {
            return false;
        }

        if (!$image) return false;

        list($width, $height) = getimagesize($source_path);
        $max_width = 1920;
        $max_height = 1080;

        if ($width > $max_width || $height > $max_height) {
            $ratio = min($max_width / $width, $max_height / $height);
            $new_width = round($width * $ratio);
            $new_height = round($height * $ratio);
        } else {
            $new_width = $width;
            $new_height = $height;
        }

        $new_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        if ($file_type == "image/jpeg" || $file_type == "image/jpg") {
            imagejpeg($new_image, $source_path, 50);
        } elseif ($file_type == "image/png") {
            imagepng($new_image, $source_path, 6);
        }

        imagedestroy($image);
        imagedestroy($new_image);

        return true;
    }
}
