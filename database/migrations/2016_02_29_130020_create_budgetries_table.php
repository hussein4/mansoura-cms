<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgetries', function (Blueprint $table) {
            $table->increments('id');
            $table->char('mr_b_no',255)->index();
            $table->char('mr_b_subject', 255)->index();
            $table->timestamp('mr_b_date')->nullable();
            $table->timestamp('mr_b_received_date')->nullable();
            $table->string('mr_b_officer')->index();
            $table->timestamp('mr_b_received_by_officer_date')->nullable();

            $table->timestamp('mr_budgetry_rfq')->nullable();
            $table->timestamp('mr_rfq_budgetry_closing_date')->nullable();
            $table->timestamp('mr_rfq_budgetry_reminder')->nullable();
            $table->timestamp('mr_budgetry_memo')->nullable();

            $table->integer('mr_b_estimated_cost')->nullable();
            $table->char('mr_b_currency', 255)->nullable();

            $table->boolean('mr_b_finished')->nullable();
            $table->char('mr_b_remarks', 255)->nullable();
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
        Schema::drop('budgetries');
    }
}
