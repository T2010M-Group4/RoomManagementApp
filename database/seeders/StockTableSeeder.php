<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'room_name' => '101',
        'room_address' => 'Số 12 ngõ 67 đình thôn',
        'room_price' => 4500000,
        'room_status' => 'Trống',
        'room_image' => 'picture.jpg',
        ]);
    }
}
