<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->increments('id');
            $table->char('mr_t_no', 255)->index();
            $table->char('mr_t_subject', 255)->index();
            $table->string('mr_t_officer')->index();
            $table->char('mr_t_identity', 255);
            $table->timestamp('mr_t_willing_fax')->nullable();
            $table->timestamp('mr_t_willing_fax_closing_date')->nullable();
            $table->timestamp('mr_t_prepare_draft')->nullable();
            $table->timestamp('mr_t_sub_bid_committee_formation_memo')->nullable();
            $table->timestamp('mr_t_tender_criteria_memo')->nullable();
            $table->timestamp('mr_t_tender_criteria_memo_reply')->nullable();
            $table->timestamp('mr_t_tender_call_for_tender_memo')->nullable();
            $table->timestamp('mr_t_tender_call_for_tender_signature')->nullable();
            $table->timestamp('mr_t_tender_send_invitation_fax')->nullable();
            $table->timestamp('mr_t_closing_date')->nullable();
            $table->timestamp('mr_t_clarifications_sent_to_tech_dept')->nullable();
            $table->timestamp('mr_t_clarifications_received_from_tech_dept')->nullable();
            $table->timestamp('mr_t_clarifications_reply_fax')->nullable();
            $table->timestamp('mr_t_open_tech_envelops')->nullable();
            $table->timestamp('mr_t_received_tech_clarifications_from_tech_dept')->nullable();
            $table->timestamp('mr_t_sending_tech_clarifications_to_suppliers')->nullable();
            $table->timestamp('mr_t_receive_tech_clarifications_reply')->nullable();
            $table->timestamp('mr_t_send_tech_clarifications_reply_to_tech_dept')->nullable();
            $table->timestamp('mr_t_receive_tech_evaluation_report')->nullable();
            $table->timestamp('mr_t_issue_tech_evaluation')->nullable();
            $table->timestamp('mr_t_tech_eval_signature')->nullable();
            $table->timestamp('mr_t_open_commercial_offers')->nullable();
            $table->timestamp('mr_t_issue_commercial_evaluation')->nullable();
            $table->timestamp('mr_t_commercial_evaluation_signature')->nullable();
            $table->timestamp('mr_t_sending_awarding_faxes')->nullable();

            $table->timestamp('mr_t_sending_fin_memo')->nullable();

            $table->boolean('mr_t_finished')->nullable();
            $table->timestamps();


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->integer('mr_id')->unsigned();
            $table->integer('vlist_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tenders');
    }
}
