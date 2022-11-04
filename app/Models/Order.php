<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'order_id';


   // public function orderm()
   // {
       // return $this->belongsTo('App\Models\Orderlist', 'order_id');
    //}
}
