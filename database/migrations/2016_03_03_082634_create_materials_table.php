<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_code')->index()->nullable();
            $table->string('m_mesc')->index()->nullable();
            $table->string('m_description')->index()->nullable();
            $table->string('m_unit')->nullable();
            $table->integer('m_consumption')->nullable();
            $table->integer('m_last_unit_price')->nullable();
            $table->string('m_last_unit_price_currency')->nullable();
            $table->integer('m_unit_price_conv_rate')->nullable();
            $table->integer('m_max')->nullable();
            $table->integer('m_min')->nullable();
            $table->string('m_remarks')->nullable();
            $table->integer('m_required')->nullable();
            $table->integer('m_stock')->nullable();
            $table->string('m_usage')->nullable();
            $table->string('m_requesting_dept')->nullable();
            $table->string('m_identity')->nullable();
            $table->string('m_company')->nullable();
            $table->string('m_location')->nullable();
            $table->integer('m_reorder')->nullable();
            $table->timestamp('m_last_update_date')->nullable();


            $table->timestamps();


            $table->integer('user_id')->unsigned();
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
        Schema::drop('materials');
    }
}
