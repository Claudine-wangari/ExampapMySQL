<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'student_number' => '094567',
            'student_name' => 'Claudine Wangari Gachiri',
            'email_address' => 'claudine.gachiri@strathmore.edu',
            'faculty' => 'FIT',
            'course' => 'ICS',
            'password' => bcrypt('Claudine@1234'),
        ]);

        DB::table('students')->insert([
            'student_number' => '094560',
            'student_name' => 'Ryan Mwangi',
            'email_address' => 'ryan.mwangi@strathmore.edu',
            'faculty' => 'FIT',
            'course' => 'ICS',
            'password' => bcrypt('Ryan@1234'),
        ]);

        DB::table('students')->insert([
            'student_number' => '094564',
            'student_name' => 'Jeremy Methu',
            'email_address' => 'jeremy.methu@strathmore.edu',
            'faculty' => 'FIT',
            'course' => 'BBIT',
            'password' => bcrypt('Jeremy@1234'),
        ]);

        DB::table('students')->insert([
            'student_number' => '094600',
            'student_name' => 'Paul Kamau',
            'email_address' => 'paul.kamau@strathmore.edu',
            'faculty' => 'FIT',
            'course' => 'BTC',
            'password' => bcrypt('Paul@1234'),
        ]);

        DB::table('students')->insert([
            'student_number' => '094500',
            'student_name' => 'Jane Immaculate',
            'email_address' => 'jane.immaculate@strathmore.edu',
            'faculty' => 'LAW',
            'password' => bcrypt('Jane@1234'),
        ]);
    }
}
