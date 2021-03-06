<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Usuario'
        ]);
        Role::create([
            'name'=>'Administrador'
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'role_id'=>2,
            'name'=>'Edilberto Soles',
            'email'=>'edilberto0905@gmail.com',
            'password'=>bcrypt('123123')
        ]);
    }
}
