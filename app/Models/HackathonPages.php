<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HackathonPages extends Model
{
    use HasFactory;

    protected $primaryKey = 'hackathon_id';

    protected $fillable = ['hackathon_id', 'first_description', 'second_description', 'about', 'challanges', 'fields'];

    public function hackathon(){

        return $this->belongsTo(Hackathon::class);

    }
}
