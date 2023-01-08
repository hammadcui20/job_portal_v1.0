<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
                    $table->increments('j_id');
                    // $table->increments('u_id');

                    $table->integer('c_id')->unsigned();
                    $table->string('jobtitle');
                    $table->string('description');
                    $table->integer('minimumsalary');
                    $table->integer('maximumsalary');
                    $table->integer('experience');
                    $table->string('qualification');
                    // $table->foreign('c_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
};
