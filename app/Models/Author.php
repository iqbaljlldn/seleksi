<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\WriterFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function books() {
        $this->hasMany(Book::class);
    }
}
