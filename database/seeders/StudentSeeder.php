<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelStudent;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student->create([
            'nickname'=>'TDA',
            'age'=>'18',
            'height'=>'1.89',
            'user_id'=>'1'
        ]);

        $student->create([
            'nickname'=>'Rei delas',
            'age'=>'18',
            'height'=>'1.98',
            'user_id'=>'1'
        ]);

        $student->create([
            'nickname'=>'Filho do Elo',
            'age'=>'18',
            'height'=>'1.88',
            'user_id'=>'1'
        ]);
    }
}
