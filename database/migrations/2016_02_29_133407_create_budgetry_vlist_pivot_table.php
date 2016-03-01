<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetryVlistPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgetry_vlist', function (Blueprint $table) {
            $table->integer('budgetry_id')->unsigned()->index();
            $table->foreign('budgetry_id')->references('id')->on('budgetries')->onDelete('cascade');
            $table->integer('vlist_id')->unsigned()->index();
            $table->foreign('vlist_id')->references('id')->on('vlist')->onDelete('cascade');
            $table->primary(['budgetry_id', 'vlist_id']);
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
        Schema::drop('budgetry_vlist');
    }
}
