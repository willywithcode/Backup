<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::truncate();

        $sizes = [34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44];

        foreach ($sizes as $size) {
            Size::create([
                'value' => $size,
            ]);
        }
    }
}
