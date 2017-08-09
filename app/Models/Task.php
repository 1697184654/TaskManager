<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function project()
    {
        //$task->project
        return $this->belongsTo(Project::class);
    }
}
