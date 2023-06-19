<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'assigned_to',
        'date_assigned',
        'due_date',
        'progress',
        'is_done',
        'comments',
    ];
    
    protected $casts =[
        'is_done'=>'boolean'
    ];

    protected $hidden = [
         'updated_at',
        
    ];
}
