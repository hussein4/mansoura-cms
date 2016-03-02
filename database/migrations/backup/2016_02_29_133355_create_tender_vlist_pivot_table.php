<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenderVlistPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_vlist', function (Blueprint $table) {
            $table->integer('tender_id')->unsigned()->index();
            $table->foreign('tender_id')->references('id')->on('tenders')->onDelete('cascade');
            $table->integer('vlist_id')->unsigned()->index();
            $table->foreign('vlist_id')->references('id')->on('vlist')->onDelete('cascade');
            $table->primary(['tender_id', 'vlist_id']);
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
        Schema::drop('tender_vlist');
    }
}
