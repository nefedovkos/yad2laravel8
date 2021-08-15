<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part1 extends Model
{
    use HasFactory;


    protected $fillable = [
        "apartment-type",
      "city",
      "street",
      "apatrtment-number",
      "apatrtment-floor",
      "apatrtment--floor-max",
      "is-on-stand",
      "parked",
      "parked-sector",
      "monthly-ad",
    ];

}
