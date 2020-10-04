<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function answer()
    {
        return $this->belongsTo('App\Models\Answer', 'answer_id');
    }
}
