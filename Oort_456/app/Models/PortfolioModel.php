<?php
namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'Portfolio';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Judul', 'Gambar', 'Deskripsi'];
}
