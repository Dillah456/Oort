<?php
namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'Riwayat';
    protected $primaryKey = 'Id';
    protected $allowedFields = [
        'Id_Riwayat', 'Periode', 'Akhir', 'Tempat', 'Program', 'Deskripsi'
    ];

    public function getByType($jenis)
    {
        return $this->select('Riwayat.*')
                    ->join('Def_Riwayat', 'Def_Riwayat.Id = Riwayat.Id_Riwayat')
                    ->where('Def_Riwayat.Jenis_Riwayat', $jenis)
                    ->findAll();
    }
}
