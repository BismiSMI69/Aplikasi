<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['meja' => 'NO-1', 'ruangan' => 'ROOM-1'],
            ['meja' => 'NO-2', 'ruangan' => 'ROOM-1'],
            ['meja' => 'NO-3', 'ruangan' => 'ROOM-1'],
            ['meja' => 'NO-1', 'ruangan' => 'ROOM-2'],
            ['meja' => 'NO-2', 'ruangan' => 'ROOM-2'],
            ['meja' => 'NO-3', 'ruangan' => 'ROOM-2']
        ];

        foreach ($data as $value) {
            Reservation::insert([
                'meja' => $value['meja'],
                'ruangan' => $value['ruangan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
