<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_id_increment extends Model
{
    use HasFactory;

    protected $fillable = [
      'orderID','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_id_increment(){
        return $this->hasMany(Order::class);
    }
}
