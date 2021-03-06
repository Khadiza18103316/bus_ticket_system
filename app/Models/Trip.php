<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table='trips';
    protected $guarded=[];

    public function location(){
        return $this->belongsTo(Location::class);
    }
}