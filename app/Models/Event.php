<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'location', 'description', 'start_time', 'end_time', 'image', 'status', 'updated_at', 'created_at' ];
}
