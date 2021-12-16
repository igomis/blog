<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'user_id', 'id');
    }
}
