<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
             $table->string('name');
              $table->string('aboutme');
               $table->string('address');
                $table->string('phone');

                $table->string('facebook');
               $table->string('twitter');
                $table->string('google');
                 $table->string('gender');

                 $table->string('school');
               $table->string('collage');
                $table->string('university');
                 $table->string('district');
               $table->string('country');
                $table->string('dateofbirth');
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
        Schema::dropIfExists('userinfos');
    }
}
