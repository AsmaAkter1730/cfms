<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Milk_collection extends Model
{
    use HasFactory;
    // protected $fillable=['collection_ID_No','cow_number','date','liter','price_perliter'];
    protected $guarded=[];
    
    public function Addcow(){

        return $this->belongsto(Addcow::class);
    }
    
}
