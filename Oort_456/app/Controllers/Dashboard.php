<?php
// app/Controllers/Dashboard.php
namespace App\Controllers;

use App\Models\Diphda;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new Diphda();
        $data['records'] = $model->findAll();

        return view('dashboard', $data);
    }

}
