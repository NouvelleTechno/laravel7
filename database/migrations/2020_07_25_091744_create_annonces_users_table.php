<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces_users', function (Blueprint $table) {
            $table->bigInteger('annonces_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('annonces_id')->references('id')->on('annonces');
            $table->foreign('users_id')->references('id')->on('users');
            $table->primary(['annonces_id', 'users_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces_users');
    }
}
