<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Nama tabel di database
    protected $table = 'product';

    // Daftar kolom yang dapat diisi
    protected $fillable = ['name', 'category_id'];

    public function relationCategory()
    {
        return $this->belongsTo(Category::class);
    }
}
