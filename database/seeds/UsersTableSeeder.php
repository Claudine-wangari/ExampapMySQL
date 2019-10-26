<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'claudine.gachiri@strathmore.edu',
            'password' => bcrypt('Claudine@1234'),
            'role' => 'student',
        ]);

        DB::table('users')->insert([
            'email' => 'fitdean@strathmore.edu',
            'password' => bcrypt('facultyDean'),
            'role' => 'Faculty Dean',
        ]);

        DB::table('users')->insert([
            'email' => 'icsadmin@strathmore.edu',
            'password' => bcrypt('icsAdmin'),
            'role' => 'Course Administrator',
        ]);

        DB::table('users')->insert([
            'email' => 'bbitadmin@strathmore.edu',
            'password' => bcrypt('bbitAdmin'),
            'role' => 'Course Administrator',
        ]);

        DB::table('users')->insert([
            'email' => 'btcadmin@strathmore.edu',
            'password' => bcrypt('btcAdmin'),
            'role' => 'Course Administrator',
        ]);

        DB::table('users')->insert([
            'email' => 'lawadmin@strathmore.edu',
            'password' => bcrypt('lawAdmin'),
            'role' => 'Course Administrator',
        ]);

        DB::table('users')->insert([
            'email' => 'aRegistrar@strathmore.edu',
            'password' => bcrypt('academicRegistrar'),
            'role' => 'Academic Registrar',
        ]);
    }
}
