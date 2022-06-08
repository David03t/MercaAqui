<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'David', 'email'=>'felipet.ft40@gmail.com','password'=> bcrypt('123456')])->assignRole('administrador');
        User::create(['name'=>'jose', 'email'=>'jose@gmail.com','password'=> bcrypt('123456')])->assignRole('usuario');
        User::factory(10)->create() ;
    }
}
