<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesCollection extends Migration
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
        Schema::connection($this->connection)->table('profiles', function(Blueprint $collection){
            $collection->index('user_id')->references('_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('profiles');
        Schema::connection($this->connection)->table('profiles', function(Blueprint $collection){
            $collection->dropIndex('user_id');
            $collection->drop();
        });
    }
}
