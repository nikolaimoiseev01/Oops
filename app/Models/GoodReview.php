<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodReview extends Model
{
    protected $fillable = [
        'good_id',
        'shop',
        'user_name',
        'date',
        'rating',
        'text',
    ];

    use HasFactory;

    public function Good() {
        return $this->belongsTo(Good::class);
    }
}
