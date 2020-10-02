<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingPoliciesTable extends Migration
{
    public function up()
    {
        Schema::create('pricing_policies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_en');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}