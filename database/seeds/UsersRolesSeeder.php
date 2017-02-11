<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('roles')->delete();
        DB::collection('roles')->insert(['name' => 'user', 'seed' => true]);
        DB::collection('roles')->insert(['name' => 'editor', 'seed' => true]);
        DB::collection('roles')->insert(['name' => 'administrator', 'seed' => true]);
    }
}