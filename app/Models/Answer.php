<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function result()
    {
        return $this->hasOne(Result::class, 'answer_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    
}
