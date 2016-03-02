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


            //Budgetry MR


            $table->integer('mr_estimated_cost')->nullable();
            $table->char('mr_currency', 255)->nullable();

            //MR
            $table->timestamp('mr_date')->nullable();
            $table->timestamp('mr_received_date')->nullable();
            $table->timestamp('mr_received_by_officer_date')->nullable();
            $table->timestamp('mr_required_date')->nullable();
            $table->timestamp('mr_checked_on_egpc_site')->nullable();

            //Quotation
            $table->timestamp('mr_rfq')->nullable();
            $table->timestamp('mr_rfq_closing_date')->nullable();
            $table->timestamp('mr_rfq_reminder')->nullable();
            $table->timestamp('mr_offers_open')->nullable();
            $table->timestamp('mr_offers_sent_to_tech_dept')->nullable();
            $table->timestamp('mr_offers_received_from_tech_dept_closing_date')->nullable();
            $table->timestamp('mr_offers_received_from_tech_dept_reminder')->nullable();
            $table->timestamp('mr_offers_received_from_tech_dept')->nullable();
            $table->timestamp('mr_offers_clarifications_sent_to_suppliers')->nullable();
            $table->timestamp('mr_offers_clarifications_closing_date')->nullable();
            $table->timestamp('mr_offers_clarifications_received_from_supplier')->nullable();
            $table->timestamp('mr_offers_clarifications_received_from_supplier_reminder')->nullable();
            $table->timestamp('mr_offers_clarifications_sent_to_tech')->nullable();
            $table->timestamp('mr_offers_evaluation')->nullable();
            $table->timestamp('mr_sent_for_budget_expansion')->nullable();
            $table->timestamp('mr_sent_for_budget_expansion_reminder')->nullable();





            $table->integer('user_id')->unsigned();
            $table->string('mrpath')->nullable();


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
