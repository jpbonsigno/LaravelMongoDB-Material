<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRolesSeederOLD extends Seeder
{
    public function run()
    {
        DB::collection('roles')->delete();
        DB::collection('roles')->insert(['id' => 1, 'name' => 'user', 'seed' => true]);
        DB::collection('roles')->insert(['id' => 2, 'name' => 'editor', 'seed' => true]);
        DB::collection('roles')->insert(['id' => 3, 'name' => 'administrator', 'seed' => true]);
    }
}