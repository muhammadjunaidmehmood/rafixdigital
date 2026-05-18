<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
     // Agar aapki migration mein table ka naam 'heros' hai toh ye line likhein:
    protected $table = 'heros'; 

    protected $fillable = ['title', 'sub_text', 'video_path', 'image_path', 'button_text'];
}
