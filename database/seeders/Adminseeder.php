<?php

namespace Database\Seeders;

use Illuminate\Database\console\seeds\withoutModelEvent;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'name' => 'Admin',
        'uname' => 'admin',
        'email' =>'admin@.com',
        'number'=>'12345678',
        'password'=> Hash::make('12345678'),
       ]);
    }
}
