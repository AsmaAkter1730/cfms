<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed_monitoring extends Model
{
    use HasFactory;
    protected $fillable=['cow_number','Remarks','date','Feed_item','Quality','Feed_time'];
}
