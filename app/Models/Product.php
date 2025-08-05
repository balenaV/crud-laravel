<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Permite que esses campos sejam preenchidos no banco
    protected $fillable = [
        "name",
        "detail"
    ];
}
