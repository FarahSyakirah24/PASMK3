<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
