<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Vaccine_monitoring extends Model
{
    use HasFactory;
    // protected $fillable=['cow_number','vaccine_date','Remarks'];
    protected $guarded=[];
    public function Addcow(){

        return $this->belongsto(Addcow::class);
    }

}
