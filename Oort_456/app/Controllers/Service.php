<?php

namespace App\Controllers;
use App\Models\Altair;


class Service extends BaseController
{
    public function index()
    {
        $model = new Altair();
        $data['data'] = $model->findAll();

        return view('Service', $data);
    }
}