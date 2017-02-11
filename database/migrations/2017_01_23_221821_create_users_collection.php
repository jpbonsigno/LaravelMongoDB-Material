<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCollection extends Migration
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
        Schema::create('users', function (Blueprint $collection) {
           $collection->index('pid');
           $collection->unique('name');
        });
        */
        Schema::connection($this->connection)->table('users', function(Blueprint $collection){
            $collection->unique('name');
            $collection->unique('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('users');
        Schema::connection($this->connection)->table('users', function(Blueprint $collection){
            $collection->dropIndex('name');
            $collection->dropIndex('email');
            $collection->drop();
        });
    }
}
