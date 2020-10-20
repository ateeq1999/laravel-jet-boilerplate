<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('project_id')->nullable();
            $table->integer('requirements');
            $table->integer('cost');
            $table->integer('duration');
            $table->integer('flexible_to_change');
            $table->integer('customer_availability');
            $table->integer('simplicity_ratio');
            $table->integer('project_size');
            $table->integer('project_complex');
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
        Schema::dropIfExists('answers');
    }
}
