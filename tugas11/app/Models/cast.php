<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cast extends Model
{
    

    protected $table = "cast";
    protected $fillable = ["nama", "umur","bio"];
}
