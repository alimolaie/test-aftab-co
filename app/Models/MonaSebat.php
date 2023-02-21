<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonaSebat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function album()
    {
        $this->hasMany(Album::class);
    }
}
