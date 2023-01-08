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
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('u_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('intro');
            $table->date('bday');
            $table->string('age');
            $table->date('pyear');
            $table->string('hq');
            $table->string('stream');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('skills');
            $table->string('desig');
            $table->string('pdf');
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
        Schema::dropIfExists('candidates');
    }
};