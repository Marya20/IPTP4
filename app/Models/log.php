<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'log_entry'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
