<?php
namespace App\Models;

use CodeIgniter\Model;

class Altair extends Model
{
    
    protected $table = 'MOC_Idea';      // Nama tabel
    protected $primaryKey = 'Idea_Central';        // Primary Key
    protected $allowedFields = [
        'Idea_Central',
        'Soure',
        'Methode',
        'Idea_Rel',
        'Canopus'
    ];
}
