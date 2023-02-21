<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function madah()
    {
        $this->belongsTo(Madah::class);
    }
    public function monasebat()
    {
        $this->belongsTo(MonaSebat::class);
    }
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
    public function setNoheNameAttribute($value1)
    {
        $this->attributes['name_nohe'] = json_encode($value1);
    }
}
