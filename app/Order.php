<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "invoices";
    public $fillable = ['customer_name','customer_email','customer_phone_number','customer_address'];
}
