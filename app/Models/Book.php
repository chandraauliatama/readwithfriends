<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS = ['want to read', 'finished reading', 'reading'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
