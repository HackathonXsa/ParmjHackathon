<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HackathonFields extends Model
{
    use HasFactory;
    protected $fillable = ['hackathon_id', 'name', 'hackathon_image', 'body'];

    public function hackathon(){

        return $this->belongsTo(Hackathon::class);

    }
}
