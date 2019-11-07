<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_challenges', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('university_id')->nullable()->default(null);
            $table->foreign('university_id')
                ->references('id')
                ->on('universities')
                ->onDelete('set null');

            $table->unsignedInteger('challenge_id')->nullable()->default(null);
            $table->foreign('challenge_id')
                ->references('id')
                ->on('challenges')
                ->onDelete('set null');

            $table->integer('person_count');
            $table->string('study_field');
            $table->string('grant_height');
            $table->string('grant_price');
            $table->string('study_degree');
            $table->string('study_time');
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
        Schema::dropIfExists('university_challenges');
    }
}
