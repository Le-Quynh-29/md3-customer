<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    use Notifiable;
    use HasFactory;
    protected $fillable = [
        'tille', 'content', 'created_at', 'due_date'
    ];
}
