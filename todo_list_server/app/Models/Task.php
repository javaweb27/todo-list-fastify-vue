<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    // model can manipulate only these columns, the rest of properties are ignored
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done'
    ];

    // model will not return these columns
    protected $hidden = ['password'];
}
