<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderforms extends Model
{
    use HasFactory;
    public $fillable = ['fullname', 'phone-number', 'email', 'delivery-address', 'city', 'state', 'zip-code', 'deadline', 'product-name', 'quantity', 'special-instructions'];
}
