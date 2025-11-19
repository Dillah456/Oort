<?php

namespace App\Controllers;
use App\Models\Data_Diri;
use App\Models\RiwayatModel;

class CvController extends BaseController
{
    public function index(): string
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
        return view('index', [
            'diri' => $diri,
            'pendidikan' => $pendidikan,
            'organisasi' => $organisasi,
            'proyek' => $proyek,
            'magang' => $magang
        ]);
    }
}
