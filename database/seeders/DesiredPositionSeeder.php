<?php

namespace Database\Seeders;

use App\Models\DesiredPosition;
use Illuminate\Database\Seeder;

class DesiredPositionSeeder extends Seeder
{

    public $position = [
        'Resident Aid',
        'Licensed Vocational Nurse',
        'Medical Assistant'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->position as $item) {
            DesiredPosition::create(['position' => $item]);
        }
    }
}
