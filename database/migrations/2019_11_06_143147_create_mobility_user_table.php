<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilityUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobility_user', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('ended')->default(false);

            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->unsignedInteger('mobility_id')->nullable()->default(null);
            $table->foreign('mobility_id')
                ->references('id')
                ->on('mobilities')
                ->onDelete('set null');

            $table->unsignedInteger('university_challenge_id')->nullable()->default(null);
            $table->foreign('university_challenge_id')
                ->references('id')
                ->on('university_challenges')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobility_user');
    }
}
