<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Addcow extends Model
{
    use HasFactory;
    // protected $fillable=['cow_number','cow_type','Gender','date_of_birth','status','image'];
    protected $guarded=[];

    public function Cowtype(){

        return $this->belongsto(Cowtype::class);
    }
}
