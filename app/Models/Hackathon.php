<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hackathon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'hackathon_image', 'date', 'targeted', 'teamsNum', 'hackathon_type', 'body'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function hackathonPages(){

        return $this->hasOne(Hackathon::class);
    }

    public function hackathonFields(){

        return $this->hasMany(Hackathon::class);
    }

}
