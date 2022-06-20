<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'picture',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
