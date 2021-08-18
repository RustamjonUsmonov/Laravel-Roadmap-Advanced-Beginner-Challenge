<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'descr', 'budget', 'client_id', 'start_date', 'due_date', 'avatar'];

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
