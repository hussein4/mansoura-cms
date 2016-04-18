<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoTenderPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_tender', function (Blueprint $table) {
            $table->integer('po_id')->unsigned()->index();
            $table->foreign('po_id')->references('id')->on('pos')->onDelete('cascade');
            $table->integer('tender_id')->unsigned()->index();
            $table->foreign('tender_id')->references('id')->on('tenders')->onDelete('cascade');
            $table->primary(['po_id', 'tender_id']);
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
        Schema::drop('po_tender');
    }
}
