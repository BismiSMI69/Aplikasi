<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Menu;
use Carbon\Carbon;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Menu::Truncate();
        Schema::enableForeignKeyConstraints();


        $data = [
            ['name'=>'Sushi Tamago', 'country' => 'Japan', 'price' => 18000, 'gambar' => 'sushi.jpeg'],
            ['name'=>'Spaghetti Bolognese', 'country' => 'Italiano', 'price' => 20000, 'gambar' => 'spaghetti.jpeg'],
            ['name'=>'Nasi Goreng Spesial', 'country' => 'Indonesia', 'price' => 14000, 'gambar' => 'nasi goreng.jpg'],
            ['name'=>'tteobokki', 'country' => 'South Korea', 'price' => 18000, 'gambar' => 'tteobokki.jpg'],
            ['name'=>'Nasi Kucing', 'country' => 'Malaysia', 'price' => 13000, 'gambar' => 'nasi kucing.jpg'],
            ['name'=>'Kimchi', 'country' => 'South Korea', 'price' => 15000, 'gambar' => 'kimchi.webp'],
            ['name'=>'Nasi Kebuli', 'country' => 'Saudi Arabia', 'price' => 18000, 'gambar' => 'nasi kebuli.jpg'],
            ['name'=>'Pizza', 'country' => 'Italiano', 'price' => 30000, 'gambar' => 'pizza.jpg'],
            ['name'=>'Seblak', 'country' => 'Indonesia', 'price' => 14000, 'gambar' => 'seblak.webp'],
            ['name'=>'Taco', 'country' => 'Mexico', 'price' => 16000, 'gambar' => 'taco.jpg'],
            ['name'=>'Kebab', 'country' => 'Turkey', 'price' => 20000, 'gambar' => 'kebab.webp']
        ];
        foreach ($data as $value) {
            Menu::insert([
                'name' => $value['name'],
                'country' => $value['country'],
                'price' => $value['price'],
                'gambar' => $value['gambar'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
