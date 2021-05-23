<?php

namespace Database\Seeders;

use App\Models\chair;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chairs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runs = [
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id'=> '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],    [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],  [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ],
            [
                'classroom_id' => '1',
                'status' => 1
            ],
            [
                'classroom_id' => '2',
                'status' => 1
            ]

        ];

        DB::table('chairs')->delete();

        foreach ($runs as $run) {
            chair::create($run);
        }
    }
}
