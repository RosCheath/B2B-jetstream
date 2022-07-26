<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'team_id',
        'price',
        'description',
        'image'
    ];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
