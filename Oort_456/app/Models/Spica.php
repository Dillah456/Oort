<?php
namespace App\Models;

use CodeIgniter\Model;

class Spica extends Model
{
    protected $table = 'transaksi_mental';      // Nama tabel
    protected $primaryKey = 'Id';        // Primary Key
    protected $allowedFields = [
        'RegDate',
        'Pengirim',
        'Penerima',
        'Nominal',
        'A4',
        'F1',
        'F2b',
        'Keterangan'
    ];
}
