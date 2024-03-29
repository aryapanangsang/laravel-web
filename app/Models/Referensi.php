<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referensi extends Model
{
    use HasFactory;

    protected $fillable = 
        [
            'name',
            'user_id',
            'no_hp',
            'keterangan'
        ];

    public function users()
    {        
        return $this->belongsTo(Referensi::class);
    }
}
