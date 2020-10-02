<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProvidersTable extends Migration
{
    public function up()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id', 'type_fk_1777950')->references('id')->on('types');
        });
    }
}