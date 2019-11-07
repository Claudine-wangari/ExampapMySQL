<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            'email' => 'icsadmin@strathmore.edu',
            'password' => bcrypt('icsAdmin'),
            'faculty' => 'FIT',
            'course' => 'ICS',
            'role' => 'Course Administrator',
        ]);

        DB::table('administrators')->insert([
            'email' => 'bbitadmin@strathmore.edu',
            'password' => bcrypt('bbitAdmin'),
            'faculty' => 'FIT',
            'course' => 'BBIT',
            'role' => 'Course Administrator',
        ]);
        DB::table('administrators')->insert([
            'email' => 'btcadmin@strathmore.edu',
            'password' => bcrypt('btcAdmin'),
            'faculty' => 'FIT',
            'course'=> 'BTC',
            'role' => 'Course Administrator',
        ]);

        DB::table('administrators')->insert([
            'email' => 'lawadmin@strathmore.edu',
            'password' => bcrypt('lawAdmin'),
            'faculty' => 'LAW',
            'role' => 'Course Administrator',
        ]);

        DB::table('administrators')->insert([
            'email' => 'fitdean@strathmore.edu',
            'password' => bcrypt('facultyDean'),
            'faculty' => 'FIT',
            'role' => 'Faculty Dean',
        ]);

        DB::table('administrators')->insert([
            'email' => 'aRegistrar@strathmore.edu',
            'password' => bcrypt('academicRegistrar'),
            'faculty' => 'General',
            'role' => 'Academic Registrar',
        ]);
    }
}
