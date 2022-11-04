<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;

    protected $table = 'orderlist';
    protected $primaryKey = 'orderlist_id';

   // public function orderlistm()
   // {
      //  return $this->hasMany('App\Models\Order', 'order_id');
 //   }
}
