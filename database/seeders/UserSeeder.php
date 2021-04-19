<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@implementhit.com',
            'password' => Hash::make('Tiketit21!'),
            'ticketit_admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Alexandra Flores',
            'email' => 'alexandra.flores@corrohealth.com',
            'password' => Hash::make('Tiketit21!'),
            'ticketit_admin' => '1',

        ]);

        DB::table('users')->insert([
            'name' => 'Anna Kurghinyan',
            'email' => 'ak@implementhit.com',
            'password' => Hash::make('Tiketit21!'),
            'ticketit_admin' => '1',

        ]);

        DB::table('users')->insert([
            'name' => 'Dmitry',
            'email' => 'dr@implementhit.com',
            'password' => Hash::make('Tiketit21!'),
            'ticketit_admin' => '1',

        ]);

        DB::table('users')->insert([
            'name' => 'Gary DeJarnett',
            'email' => 'gd@implementhit.com',
            'password' => Hash::make('Tiketit21!'),
            'ticketit_admin' => '1',

        ]);
    }
}
