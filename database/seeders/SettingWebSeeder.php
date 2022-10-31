<?php

namespace Database\Seeders;

use App\Models\SettingWeb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SettingWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingWeb::create([
            'nama_website' => 'Labelin.Co',
            'kode_website' => 'LA.c',
            'logo_dark' => 'logo.jpg',
            'logo_light' => 'logo.jpg',
            'telpon' => '083874731480',
            'email' => 'saepulramdan244@gmail.com',
            'alamat' => 'Perumahan SAI Residance Blok E6 , Tajur halang, Kabupaten Bogor',
            'deskripsi' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'is_aktif_website' => 'Y',
        ]);
    }
}
