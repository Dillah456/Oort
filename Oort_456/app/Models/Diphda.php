<?php
namespace App\Models;

use CodeIgniter\Model;

class Diphda extends Model
{
    
    protected $table = 'Diphda_Rill';      // Nama tabel
    protected $primaryKey = 'Id';        // Primary Key
    protected $allowedFields = [
        'Id',
        'RegDate',
        'Nama',
        'Harta',
        'Hutang'
    ];
}


