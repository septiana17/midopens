<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
    
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
