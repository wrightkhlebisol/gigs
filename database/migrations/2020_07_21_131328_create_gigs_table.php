<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('min_salary')->nullable;
            $table->int('max_salary')->nullable;
            $table->string('role')->nullable;
            $table->string('company')->nullable;
            $table->string('country')->nullable;
            $table->string('state')->nullable;
            $table->string('address')->nullable;
            $table->string('tags')->nullable;
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
        Schema::dropIfExists('gigs');
    }
}
