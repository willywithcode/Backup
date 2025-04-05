<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Size;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::truncate();

        $colors = ['Đen', 'Trắng', 'Hồng', 'Đỏ', 'Cam', 'Nâu', 'Xanh'];

        foreach ($colors as $color) {
            Color::create([
                'value' => $color,
            ]);
        }
    }
}
