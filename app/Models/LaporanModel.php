<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_jalan', 'deskripsi', 'koordinat', 'foto', 'created_at'];
}
