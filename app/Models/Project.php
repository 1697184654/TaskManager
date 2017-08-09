<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function user()
    {
        //$project->user
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        //$project->tasks
        return $this->hasMany(Task::class);
    }
}
