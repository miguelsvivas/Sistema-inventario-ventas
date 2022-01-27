<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access',
        ]);

        $user = User::create([
            'name'=>'Miguel',
            'email'=>'miguel@correo.com',
            'password'=>'$2y$10$gxfVIF/lWaIGmC5Kbfh9HenWnTUim/cRZhtgHBwWM7H.wC6MHTVxC',
        ]);

        $user->roles()->sync(1);
    }

    }

