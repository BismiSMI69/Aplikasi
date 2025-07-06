<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reservation_date',
        'reservation_id',
        'gambar'
    ];

    public function reservations()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id', 'id');
    }
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'customer_menu', 'customer_id', 'menu_id');
    }

}
