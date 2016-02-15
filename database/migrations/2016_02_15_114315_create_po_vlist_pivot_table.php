<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoVlistPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_vlist', function (Blueprint $table) {
            $table->integer('po_id')->unsigned()->index();
            $table->foreign('po_id')->references('id')->on('pos')->onDelete('cascade');
            $table->integer('vlist_id')->unsigned()->index();
            $table->foreign('vlist_id')->references('id')->on('vlist')->onDelete('cascade');
            $table->primary(['po_id', 'vlist_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('po_vlist');
    }
}
