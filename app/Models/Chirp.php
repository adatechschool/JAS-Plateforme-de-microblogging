<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'img_url',
        // 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
