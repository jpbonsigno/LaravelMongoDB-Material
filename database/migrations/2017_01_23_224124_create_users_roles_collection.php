<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesCollection extends Migration
{
    /**
     * The name of the database connection to use.
     *
     * @var string
     */
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('roles', function (Blueprint $collection) {
           $collection->index('pid');
           $collection->unique('name');
        });
        */
        Schema::connection($this->connection)->table('roles', function(Blueprint $collection){
            $collection->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('roles');
        Schema::connection($this->connection)->table('roles', function(Blueprint $collection){
            $collection->dropIndex('name');
            $collection->drop();
        });
    }
}
