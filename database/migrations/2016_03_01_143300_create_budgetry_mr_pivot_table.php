<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetryMrPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgetry_mr', function (Blueprint $table) {
            $table->integer('budgetry_id')->unsigned()->index();
            $table->foreign('budgetry_id')->references('id')->on('budgetries')->onDelete('cascade');
            $table->integer('mr_id')->unsigned()->index();
            $table->foreign('mr_id')->references('id')->on('mrs')->onDelete('cascade');
            $table->primary(['budgetry_id', 'mr_id']);
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
        Schema::drop('budgetry_mr');
    }
}
