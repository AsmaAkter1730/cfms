<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Milk_sale extends Model
{
    use HasFactory;
    // protected $fillable=['collection_ID_No','cutomer_name','date','liter','price_perliter'];
    protected $guarded=[];
    
    public function Milk_collection(){

        return $this->belongsto(Milk_collection::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
  
}
