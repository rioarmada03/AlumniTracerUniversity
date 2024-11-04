<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questioner extends Model
{
    use HasFactory;

    protected $table = 'questioners'; // Ini opsional jika nama tabel sesuai dengan konvensi Laravel

    protected $fillable = ['user_id','question','answer']; // Daftar kolom yang dapat diisi secara massal

    // Definisikan relasi ke model User
    public function relationUser() {
        return $this->belongsTo(User::class); // Definisi relasi belongsTo dengan User
    }
}
