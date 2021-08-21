<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Feed_monitoring extends Model
{
    use HasFactory;
    // protected $fillable=['cow_number','Remarks','date','Feed_item','Quality','Feed_time'];
    protected $guarded=[];

    public function Addcow(){

        return $this->belongsto(Addcow::class);
    }


}
