<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOffline extends Model
{
    protected $fillable = [
        'title',
        'address',
        'hours',
        'mobile',
        'site'
    ];
    use HasFactory;
}
