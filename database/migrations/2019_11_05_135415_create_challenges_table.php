<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');

            $table->unsignedInteger('mobility_id')->nullable()->default(null);
            $table->foreign('mobility_id')
                ->references('id')
                ->on('mobilities')
                ->onDelete('set null');

            $table->string('description');
            $table->string('image');

            $table->string('content');
            $table->string('participation_condition');

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
        Schema::dropIfExists('challenges');
    }
}
