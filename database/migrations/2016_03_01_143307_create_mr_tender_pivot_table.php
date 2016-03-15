<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrTenderPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mr_tender', function (Blueprint $table) {
            $table->integer('mr_id')->unsigned()->index();
            $table->foreign('mr_id')->references('id')->on('mrs')->onDelete('cascade');
            $table->integer('tender_id')->unsigned()->index();
            $table->foreign('tender_id')->references('id')->on('tenders')->onDelete('cascade');
            $table->primary(['mr_id', 'tender_id']);
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
        Schema::drop('mr_tender');
    }
}