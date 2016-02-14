<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class CreateMrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrs', function (Blueprint $table) {
            $table->increments('id');
            $table->char('mr_no',255)->index();
            $table->char('mr_subject', 255)->index();
            $table->timestamp('mr_date')->default(Carbon::now());
            $table->timestamp('mr_received_date')->default(Carbon::now());
            $table->timestamp('mr_received_by_officer_date')->default(Carbon::now());
            $table->integer('mr_estimated_cost');
            //date required
            $table->timestamp('mr_budgetry_rfq')->default(Carbon::now());
            $table->timestamp('mr_rfq_budgetry_closing_date')->default(Carbon::now());
            $table->timestamp('mr_rfq_budgetry_reminder')->default(Carbon::now());
            $table->timestamp('mr_budgetry_memo')->default(Carbon::now());
            $table->timestamp('mr_checked_on_egpc_site')->default(Carbon::now());
            $table->timestamp('mr_rfq')->default(Carbon::now());
            $table->timestamp('mr_rfq_closing_date')->default(Carbon::now());
            $table->timestamp('mr_rfq_reminder')->default(Carbon::now());
            $table->timestamp('mr_offers_open')->default(Carbon::now());
            $table->timestamp('mr_offers_sent_to_tech_dept')->default(Carbon::now());
            $table->timestamp('mr_offers_received_from_tech_dept_closing_date')->default(Carbon::now());
            $table->timestamp('mr_offers_received_from_tech_dept_reminder')->default(Carbon::now());
            $table->timestamp('mr_offers_clarifications_sent_to_suppliers')->default(Carbon::now());
            $table->timestamp('mr_offers_clarifications_closing_date')->default(Carbon::now());
            $table->timestamp('mr_offers_clarifications_received_from_supplier')->default(Carbon::now());
            $table->timestamp('mr_offers_clarifications_received_from_supplier_reminder')->default(Carbon::now());
            $table->timestamp('mr_offers_clarifications_sent_to_tech')->default(Carbon::now());
            $table->timestamp('mr_offers_evaluation')->default(Carbon::now());
            $table->timestamp('mr_sent_for_budget_expansion')->default(Carbon::now());
            $table->timestamp('mr_sent_for_budget_expansion_reminder')->default(Carbon::now());
            $table->integer('user_id')->unsigned();
            $table->string('mrpath');
           // $table->integer('vlist_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

      /*      $table->foreign('vlist_id')
                ->references('id')
                ->on('vlist')
                ->onDelete('cascade');    */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mrs');
    }
}
