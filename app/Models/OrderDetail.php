<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'status', 'product_name', 'quantity', 'unit_price', 'amount'];

    // Define relationship to the orders table
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
