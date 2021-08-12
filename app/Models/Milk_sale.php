<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milk_sale extends Model
{
    use HasFactory;
    protected $fillable=['collection_ID_No','cutomer_name','date','liter','price_perliter'];
}
