<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_menu', 'menu_id', 'customer_id');
    }
}
