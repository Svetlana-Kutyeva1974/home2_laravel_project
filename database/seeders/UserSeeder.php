<?php

namespace Database\Seeders;

//use Cassandra\Timestamp;
//use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('to_dos')->insert([
                   'id' => 1,
                   'title' => Str::random(10).'имя1',
                   'description' => Str::random(10).'описание1',
                   //'created_at' => '',
                   // 'updated_at' => '',
                   // 'password' => Hash::make('password'),
                ]);
    }
}
