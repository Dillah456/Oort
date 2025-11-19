<?php

namespace App\Controllers;

use App\Models\Data_Diri;
use App\Models\RiwayatModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home');
    }

    public function about_me(): string
    {
        return view('About');
    }

    public function curiculum_vitae(): string
    {
        $cvModel = new Data_Diri();
        $diri = $cvModel->first();

        // Ambil data pendidikan dari RiwayatModel
        $riwayat_pendidikan = new RiwayatModel();
        $pendidikan = $riwayat_pendidikan->getByType('Pendidikan');
        $riwayat_Organisasi = new RiwayatModel();
        $organisasi = $riwayat_Organisasi->getByType('Organisasi');
        $riwayat_magang = new RiwayatModel();
        $magang = $riwayat_magang->getByType('Magang');
        $riwayat_Proyek = new RiwayatModel();
        $proyek = $riwayat_Proyek->getByType('Proyek');
        $galeria = new RiwayatModel();
        // Kirim data ke view
        return view('Cv', [
            'diri' => $diri,
            'pendidikan' => $pendidikan,
            'organisasi' => $organisasi,
            'proyek' => $proyek,
            'magang' => $magang
        ]);
    }
}
