<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine_monitoring extends Model
{
    use HasFactory;
    protected $fillable=['cow_number','vaccine_date','Remarks'];
}
