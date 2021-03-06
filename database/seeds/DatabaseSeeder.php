<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call('SeedRoles');
        
        $this->call('UsersRolesSeeder');

        $this->command->info('User Roles Colletion seeded!');

        Model::reguard();
    }
}