<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Define which fields are mass assignable
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date'
    ];

    // Default values for the model attributes
    protected $attributes = [
        'status' => 'pending',
    ];

    // Automatically handle timestamps (created_at, updated_at)
    public $timestamps = true;
}
