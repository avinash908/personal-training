<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('review_id')->nullable();
            $table->integer('knowledge_rating')->nullable();
            $table->integer('training_technique_rating')->nullable();
            $table->integer('communication_rating')->nullable();
            $table->integer('results_rating')->nullable();
            $table->integer('service_quality_rating')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer_ratings');
    }
}
