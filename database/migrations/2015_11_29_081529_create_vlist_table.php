<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class CreateVlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vlist', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('vname')->index();
            $table->char('vservice', 255)->index();
            $table->string('vegpcno');
            $table->string('vfax');
            $table->string('vphone');
            $table->string('vmobile');
            $table->string('vemail');
            $table->string('vcontactperson');
            $table->text('vaddress');
            $table->integer('vgrade');
            $table->text('vremarks');
            $table->integer('vcapitallimit');
            $table->timestamp('created_on')->default(Carbon::now());
            $table->timestamp('updated_on')->default(Carbon::now());
            $table->timestamps();


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('vlist');
    }
}
