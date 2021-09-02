<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Cow_sale extends Model
{
    use HasFactory;
    // protected $fillable=['Invoice_no','cow_number','cus_name','email','cus_mobile','amount','date','remarks'];
    protected $guarded=[];

    public function Addcow(){

        return $this->belongsto(Addcow::class);
    }
}


