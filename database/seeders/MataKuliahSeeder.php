<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mataKuliah = [
            ['kodemk' => 'PAIK6101', 'nama' => 'Matematika I', 'sks' => 2],
            ['kodemk' => 'PAIK6102', 'nama' => 'Dasar Pemrograman', 'sks' => 3],
            ['kodemk' => 'PAIK6103', 'nama' => 'Dasar Sistem', 'sks' => 3],
            ['kodemk' => 'PAIK6104', 'nama' => 'Logika Informatika', 'sks' => 3],
            ['kodemk' => 'PAIK6105', 'nama' => 'Struktur Diskrit', 'sks' => 4],
            ['kodemk' => 'UUW00003', 'nama' => 'Pancasila dan Kewarganegaraan', 'sks' => 3],
            ['kodemk' => 'UUW00005', 'nama' => 'Olahraga', 'sks' => 1],
            ['kodemk' => 'UUW00007', 'nama' => 'Bahasa Inggris', 'sks' => 2],
            ['kodemk' => 'PAIK6201', 'nama' => 'Matematika II', 'sks' => 2],
            ['kodemk' => 'PAIK6202', 'nama' => 'Algoritma dan Pemrograman', 'sks' => 4],
            ['kodemk' => 'PAIK6203', 'nama' => 'Organisasi dan Arsitektur Komputer', 'sks' => 3],
            ['kodemk' => 'PAIK6204', 'nama' => 'Aljabar Linier', 'sks' => 3],
            ['kodemk' => 'UUW00004', 'nama' => 'Bahasa Indonesia', 'sks' => 2],
            ['kodemk' => 'UUW00006', 'nama' => 'Internet of Things (IoT)', 'sks' => 2],
            ['kodemk' => 'UUW00011', 'nama' => 'Pendidikan Agama Islam', 'sks' => 2],
            ['kodemk' => 'UUW00021', 'nama' => 'Pendidikan Agama Kristen', 'sks' => 2],
            ['kodemk' => 'UUW00031', 'nama' => 'Pendidikan Agama Khatolik', 'sks' => 2],
            ['kodemk' => 'UUW00041', 'nama' => 'Pendidikan Agama Hindu', 'sks' => 2],
            ['kodemk' => 'UUW00051', 'nama' => 'Pendidikan Agama Buddha', 'sks' => 2],
            ['kodemk' => 'UUW00061', 'nama' => 'Pendidikan Agama Kong Hu Chu', 'sks' => 2],
            ['kodemk' => 'UUW00071', 'nama' => 'Aliran Kepercayaan terhadap Tuhan Yang Maha Esa', 'sks' => 2],
            ['kodemk' => 'PAIK6301', 'nama' => 'Struktur Data', 'sks' => 4],
            ['kodemk' => 'PAIK6302', 'nama' => 'Sistem Operasi', 'sks' => 3],
            ['kodemk' => 'PAIK6303', 'nama' => 'Basis Data', 'sks' => 4],
            ['kodemk' => 'PAIK6304', 'nama' => 'Metode Numerik', 'sks' => 3],
            ['kodemk' => 'PAIK6305', 'nama' => 'Interaksi Manusia dan Komputer', 'sks' => 3],
            ['kodemk' => 'PAIK6306', 'nama' => 'Statistika', 'sks' => 2],
            ['kodemk' => 'PAIK6401', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3],
            ['kodemk' => 'PAIK6402', 'nama' => 'Jaringan Komputer', 'sks' => 3],
            ['kodemk' => 'PAIK6403', 'nama' => 'Manajemen Basis Data', 'sks' => 3],
            ['kodemk' => 'PAIK6404', 'nama' => 'Grafika dan Komputasi Visual', 'sks' => 3],
            ['kodemk' => 'PAIK6405', 'nama' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6406', 'nama' => 'Sistem Cerdas', 'sks' => 3],
            ['kodemk' => 'PAIK6501', 'nama' => 'Pengembangan Berbasis Platform', 'sks' => 4],
            ['kodemk' => 'PAIK6502', 'nama' => 'Komputasi Tersebar dan Pararel', 'sks' => 3],
            ['kodemk' => 'PAIK6503', 'nama' => 'Sistem Informasi', 'sks' => 3],
            ['kodemk' => 'PAIK6504', 'nama' => 'Proyek Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6505', 'nama' => 'Pembelajaran Mesin', 'sks' => 3],
            ['kodemk' => 'PAIK6506', 'nama' => 'Keamanan dan Jaminan Informasi', 'sks' => 3],
            ['kodemk' => 'UUW00008', 'nama' => 'Kewirausahaan', 'sks' => 2],
            ['kodemk' => 'PAIK6601', 'nama' => 'Analisis dan Strategi Algoritma', 'sks' => 3],
            ['kodemk' => 'PAIK6602', 'nama' => 'Uji Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6603', 'nama' => 'Masyarakat dan Etika Profesi', 'sks' => 3],
            ['kodemk' => 'PAIK6604', 'nama' => 'Praktik Kerja Lapangan', 'sks' => 3],
            ['kodemk' => 'PAIK6605', 'nama' => 'Manajemen Proyek', 'sks' => 3],
            ['kodemk' => 'PAIK6701', 'nama' => 'Metodologi Penelitian dan Penulisan Ilmiah', 'sks' => 2],
            ['kodemk' => 'PAIK6702', 'nama' => 'Teori Bahasa dan Otomata', 'sks' => 3],
            ['kodemk' => 'PAIK6703', 'nama' => 'Metode Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6704', 'nama' => 'Kualitas Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6705', 'nama' => 'Pemodelan dan Simulasi', 'sks' => 3],
            ['kodemk' => 'PAIK6706', 'nama' => 'Visi Komputer', 'sks' => 3],
            ['kodemk' => 'PAIK6707', 'nama' => 'Audit Sistem Informasi', 'sks' => 3],
            ['kodemk' => 'PAIK6708', 'nama' => 'Penambangan Data', 'sks' => 3],
            ['kodemk' => 'PAIK6709', 'nama' => 'Sistem Tertanam', 'sks' => 3],
            ['kodemk' => 'PAIK6710', 'nama' => 'Algoritma Evolusioner', 'sks' => 3],
            ['kodemk' => 'PAIK6711', 'nama' => 'Komputasi Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6712', 'nama' => 'Temu Balik Informasi', 'sks' => 3],
            ['kodemk' => 'PAIK6801', 'nama' => 'Topik Khusus RPL & STI', 'sks' => 3],
            ['kodemk' => 'PAIK6802', 'nama' => 'Topik Khusus SC & KG', 'sks' => 3],
            ['kodemk' => 'PAIK6803', 'nama' => 'Evolusi Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6804', 'nama' => 'Rekayasa Sistem', 'sks' => 3],
            ['kodemk' => 'PAIK6805', 'nama' => 'Komputasi Awan', 'sks' => 3],
            ['kodemk' => 'PAIK6806', 'nama' => 'Arsitektur Perangkat Lunak', 'sks' => 3],
            ['kodemk' => 'PAIK6807', 'nama' => 'Pemrograman Lanjut', 'sks' => 3],
            ['kodemk' => 'PAIK6808', 'nama' => 'Pengenalan Pola', 'sks' => 3],
            ['kodemk' => 'PAIK6809', 'nama' => 'Kriptografi', 'sks' => 3],
            ['kodemk' => 'PAIK6810', 'nama' => 'Bioinformatika', 'sks' => 3],
            ['kodemk' => 'PAIK6811', 'nama' => 'Keamanan Siber', 'sks' => 3],
            ['kodemk' => 'PAIK6812', 'nama' => 'Pemrosesan Citra Medis', 'sks' => 3],
            ['kodemk' => 'PAIK6813', 'nama' => 'Data Besar', 'sks' => 3],
            ['kodemk' => 'PAIK6814', 'nama' => 'Intelijen Bisnis', 'sks' => 3],
            ['kodemk' => 'PAIK6815', 'nama' => 'Pemodelan Informasi', 'sks' => 3],
            ['kodemk' => 'PAIK6816', 'nama' => 'Sistem Enterprise', 'sks' => 3],
            ['kodemk' => 'PAIK6817', 'nama' => 'Robotika', 'sks' => 3],
            ['kodemk' => 'PAIK6818', 'nama' => 'Pengolahan Bahasa Alami', 'sks' => 3],
            ['kodemk' => 'PAIK6819', 'nama' => 'Analisis Jaringan Sosial', 'sks' => 3],
            ['kodemk' => 'PAIK6820', 'nama' => 'Sains Data', 'sks' => 3],
            ['kodemk' => 'PAIK6821', 'nama' => 'Tugas Akhir', 'sks' => 6],
            ['kodemk' => 'UUW00009', 'nama' => 'Kuliah Kerja Nyata (KKN)', 'sks' => 3],
        ];

        foreach ($mataKuliah as $mk) {
            MataKuliah::create($mk);
        }
    }
}
