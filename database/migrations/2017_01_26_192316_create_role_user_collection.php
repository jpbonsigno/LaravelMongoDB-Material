<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserCollection extends Migration
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
        Schema::connection($this->connection)->table('role_user', function(Blueprint $collection){
            $collection->index('user_id')->references('_id')->on('users')->onDelete('cascade');
            $collection->index('role_id')->references('_id')->on('roles')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('role_user');
        Schema::connection($this->connection)->table('role_user', function(Blueprint $collection){
            $collection->dropIndex('user_id');
            $collection->dropIndex('role_id');
            $collection->drop();
        });
    }
}
