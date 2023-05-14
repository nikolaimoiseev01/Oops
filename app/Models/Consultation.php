<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'topic',
        'user_name',
        'user_email',
        'user_mobile',
        'user_text',
        'consult_status_id'
    ];

    public function ConsultStatus() {
        return $this->belongsTo(ConsultStatus::class);
    }

    use HasFactory;
}
