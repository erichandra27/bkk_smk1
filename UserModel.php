<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Tabel yang akan digunakan
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'password', 'role_id'];  // Kolom yang bisa diisi
    protected $useTimestamps = true;  // Menggunakan timestamps (created_at, updated_at)
}
