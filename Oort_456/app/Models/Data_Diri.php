<?php
namespace App\Models;

use CodeIgniter\Model;

class Data_Diri extends Model
{
    protected $table = 'Data_Diri';      // Nama tabel
    protected $primaryKey = 'Id';        // Primary Key
    protected $allowedFields = [
        'Nama', 
        'Tempat_Lahir', 
        'Tanggal_Lahir', 
        'Contact'
    ];
}

