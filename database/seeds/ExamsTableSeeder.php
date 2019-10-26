<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Exams')->insert([
            'date' => '24/7/19',
            'unit_name_code' => 'ICS 4103: Special Topics - Embedded Systems Design',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'ICS 4 APR 19 A',
            'venue' => 'Blue Sky',
        ]);

        DB::table('Exams')->insert([
            'date' => '24/7/19',
            'unit_name_code' => 'ICS 4103: Special Topics - Embedded Systems Design',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'ICS 4 APR 19 B',
            'venue' => 'Blue Sky',
        ]);

        DB::table('Exams')->insert([
            'date' => '16/7/19',
            'unit_name_code' => 'ICS 4102: Artificial Neural Network and Pattern Recognition',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'ICS 4 APR 19 A',
            'venue' => 'Blue Sky',
        ]);

        DB::table('Exams')->insert([
            'date' => '16/7/19',
            'unit_name_code' => 'ICS 4102: Artificial Neural Network and Pattern Recognition',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'ICS 4 APR 19 B',
            'venue' => 'Blue Sky',
        ]);

        DB::table('Exams')->insert([
            'date' => '26/7/19',
            'unit_name_code' => 'BTC 4104: Information Systems Security and Design',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'BTC 4 APR 19',
            'venue' => 'STM 5th floor',
        ]);

        DB::table('Exams')->insert([
            'date' => '26/7/19',
            'unit_name_code' => 'ICS 4203: Information Systems Security and Design',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'ICS 4 APR 19 A',
            'venue' => 'STM 5th Floor',
        ]);

        DB::table('Exams')->insert([
            'date' => '26/7/19',
            'unit_name_code' => 'ICS 4203: Information Systems Security and Design',
            'start_time' => '11:30',
            'stop_time' => '13:30',
            'group' => 'ICS 4 APR 19 B',
            'venue' => 'STM 5th Floor',
        ]);

        DB::table('Exams')->insert([
            'date' => '23/7/19',
            'unit_name_code' => 'ICS 4106: Computer Simulations and Modeling',
            'start_time' => '8:45',
            'stop_time' => '10:45',
            'group' => 'ICS 4 APR 19 A',
            'venue' => 'Blue Sky',
        ]);

        DB::table('Exams')->insert([
            'date' => '23/7/19',
            'unit_name_code' => 'ICS 4106: Computer Simulations and Modeling',
            'start_time' => '8:45',
            'stop_time' => '10:45',
            'group' => 'ICS 4 APR 19 B',
            'venue' => 'Blue Sky',
        ]);

        DB::table('Exams')->insert([
            'date' => '18/7/19',
            'unit_name_code' => 'ICS 4104: Distributed Systems',
            'start_time' => '8:45',
            'stop_time' => '10:45',
            'group' => 'ICS 4 APR 19 A',
            'venue' => 'STM 5th Floor',
        ]);

        DB::table('Exams')->insert([
            'date' => '18/7/19',
            'unit_name_code' => 'ICS 4104: Distributed Systems',
            'start_time' => '8:45',
            'stop_time' => '10:45',
            'group' => 'ICS 4 APR 19 B',
            'venue' => 'STM 5th Floor',
        ]);

        DB::table('Exams')->insert([
            'date' => '18/7/19',
            'unit_name_code' => 'BTC 4201: Distributed Systems',
            'start_time' => '8:45',
            'stop_time' => '10:45',
            'group' => 'BTC 4 APR 19',
            'venue' => 'STM 5th Floor',
        ]);
    }
}
