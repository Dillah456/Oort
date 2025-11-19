<?php

namespace App\Controllers;
use App\Models\Diphda;


class Formalhault extends BaseController
{
    public function save()
    {
        $model = new Diphda();

        // Ambil data dari form POST
        $data = [
            'Id' => $this->request->getPost('Id'),
            'Nama'  => $this->request->getPost('Nama'),
            'Harta' => $this->request->getPost('Harta'),
            'Hutang'=> $this->request->getPost('Hutang'),
            'RegDate' => date('Y-m-d'),
        ];

        // Simpan ke database
        $model->insert($data);

        return redirect()->to('/Dashboard');
    }
}
