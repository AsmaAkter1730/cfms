<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow_sale extends Model
{
    use HasFactory;
    protected $fillable=['Invoice_no','cow_number','cus_name','email','cus_mobile','amount','date','remarks'];
}
