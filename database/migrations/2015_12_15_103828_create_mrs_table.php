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
            $table->timestamp('mr_b_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_b_received_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_b_received_by_officer_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_budgetry_rfq')->default(Carbon::now())->nullable();
            $table->timestamp('mr_rfq_budgetry_closing_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_rfq_budgetry_reminder')->default(Carbon::now())->nullable();
            $table->timestamp('mr_budgetry_memo')->default(Carbon::now())->nullable();

            $table->integer('mr_estimated_cost')->nullable();
            $table->char('mr_currency', 255)->nullable();

            //MR
            $table->timestamp('mr_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_received_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_received_by_officer_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_required_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_checked_on_egpc_site')->default(Carbon::now())->nullable();

            //Quotation
            $table->timestamp('mr_rfq')->default(Carbon::now())->nullable();
            $table->timestamp('mr_rfq_closing_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_rfq_reminder')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_open')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_sent_to_tech_dept')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_received_from_tech_dept_closing_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_received_from_tech_dept_reminder')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_received_from_tech_dept')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_clarifications_sent_to_suppliers')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_clarifications_closing_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_clarifications_received_from_supplier')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_clarifications_received_from_supplier_reminder')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_clarifications_sent_to_tech')->default(Carbon::now())->nullable();
            $table->timestamp('mr_offers_evaluation')->default(Carbon::now())->nullable();
            $table->timestamp('mr_sent_for_budget_expansion')->default(Carbon::now())->nullable();
            $table->timestamp('mr_sent_for_budget_expansion_reminder')->default(Carbon::now())->nullable();

            //Tender
            $table->char('mr_t_identity', 255)->nullable();
            $table->timestamp('mr_t_willing_fax')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_willing_fax_closing_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_prepare_draft')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_sub_bid_committee_formation_memo')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_tender_criteria_memo')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_tender_criteria_memo_reply')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_tender_call_for_tender_memo')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_tender_call_for_tender_signature')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_tender_send_invitation_fax')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_closing_date')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_clarifications_sent_to_tech_dept')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_clarifications_received_from_tech_dept')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_clarifications_reply_fax')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_open_tech_envelops')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_received_tech_clarifications_from_tech_dept')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_sending_tech_clarifications_to_suppliers')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_receive_tech_clarifications_reply')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_send_tech_clarifications_reply_to_tech_dept')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_receive_tech_evaluation_report')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_issue_tech_evaluation')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_tech_eval_signature')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_open_commercial_offers')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_issue_commercial_evaluation')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_commercial_evaluation_signature')->default(Carbon::now())->nullable();
            $table->timestamp('mr_t_sending_awarding_faxes')->default(Carbon::now())->nullable();

            $table->timestamp('mr_t_sending_fin_memo')->default(Carbon::now())->nullable();

            $table->boolean('mr_t_finished')->nullable();



            $table->integer('user_id')->unsigned();
            $table->string('mrpath')->nullable();
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
