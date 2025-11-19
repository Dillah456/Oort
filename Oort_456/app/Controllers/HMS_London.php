<?php

namespace App\Controllers;
use App\Models\Altair;


class HMS_London extends BaseController
{
    public function index()
    {
        $model = new Altair();
        $data['records'] = $model->findAll();

        return view('Service', $data);
    }
}