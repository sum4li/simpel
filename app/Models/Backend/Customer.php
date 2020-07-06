<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $tables = 'customers';
    protected $fillable = ['name','email','address','phone_number','identity_card_photo'];
}
