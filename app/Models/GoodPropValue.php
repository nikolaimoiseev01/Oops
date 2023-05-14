<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodPropValue extends Model
{
    protected $fillable = [
        'title',
        'good_prop_name_id'
    ];


    public function GoodPropName() {
        return $this->belongsTo(GoodPropName::class);
    }

    use HasFactory;
}
