<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Good extends Model implements HasMedia
{
    protected $fillable = [
        'title',
        'good_category_id',
        'properties',
        'advantages',
        'desc',
        'compound',
        'instruction',
        'capacity',
        'capacity_type',
        'links',
    ];

    public function GoodCategory() {
        return $this->belongsTo(GoodCategory::class);
    }

    public function GoodReview() {
        return $this->hasMany(GoodReview::class);
    }

    protected $casts = [
        'properties' => 'array',
        'advantages' => 'array',
        'links' => 'array'

    ];

    use InteractsWithMedia;
    use HasFactory;
}
