<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;

    protected $fillable = [
        'bio_text',
        'bio_img_ref',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
