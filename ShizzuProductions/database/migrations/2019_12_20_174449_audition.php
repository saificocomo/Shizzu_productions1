<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Audition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audition', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('email');
            $table->text('homeadd');
            $table->text('dob');
            $table->text('gender');
            $table->text('age');
            $table->text('height');
            $table->double('pno');
            $table->text('categories');

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
        //
    }
}
