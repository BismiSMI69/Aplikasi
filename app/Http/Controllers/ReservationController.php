<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index(){
        $reservation = Reservation::get();
        return view('reservasi', ['reservasiList' => $reservation]);
    }
}
