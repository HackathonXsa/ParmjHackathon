<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HackathonTimelines extends Model
{
    use HasFactory;
    protected $fillable = ['hackathon_id', 'name', 'position', 'body', 'date'];
    
}
