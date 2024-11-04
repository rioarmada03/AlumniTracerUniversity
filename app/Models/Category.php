<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
        // Nama tabel di database
        protected $table = 'categories';

        // Daftar kolom yang dapat diisi
        protected $fillable = ['name'];
        
        public function products()
        {
            return $this->hasMany(Product::class);
        }
}
