<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrPoPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mr_po', function (Blueprint $table) {
            $table->integer('mr_id')->unsigned()->index();
            $table->foreign('mr_id')->references('id')->on('mrs')->onDelete('cascade');
            $table->integer('po_id')->unsigned()->index();
            $table->foreign('po_id')->references('id')->on('pos')->onDelete('cascade');
            $table->primary(['mr_id', 'po_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mr_po');
    }
}
