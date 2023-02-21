<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_id',
        'user_id',
        'order_total',
        'created_at',
    ];    

}
