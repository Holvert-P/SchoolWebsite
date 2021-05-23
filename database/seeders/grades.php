<?php

namespace Database\Seeders;

use App\Models\grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class grades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs = [
            ['description' => '1ro'],
            ['description' => '2do'],
            ['description' => '3ro'],
            ['description' => '4to'],
            ['description' => '5to'],

        ];

        DB::table('grades')->delete();

        foreach ($runs as $run) {
            grade::create($run);
        }
    }
}
