<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('po_no', 255)->index();
            $table->char('po_subject', 255)->index();
            $table->integer('po_materials_cost');
            $table->integer('po_freight_cost')->nullable();
            $table->integer('po_total_cost');
            $table->string('po_currency')->nullable();
            $table->string('po_payment_method')->nullable();
            $table->string('po_delivery_method')->nullable();
            $table->timestamp('po_issued')->default(Carbon::now());
            $table->timestamp('po_confirmation')->default(Carbon::now())->nullable();
            $table->timestamp('po_loaded_on_ideas')->default(Carbon::now())->nullable();
            $table->timestamp('po_approved_on_ideas')->default(Carbon::now())->nullable();
            $table->timestamp('po_memo_to_fin')->default(Carbon::now())->nullable();
            $table->timestamp('po_delivery_date')->default(Carbon::now())->nullable();
            $table->timestamp('po_documents_sent_to_bank')->default(Carbon::now())->nullable();
            $table->timestamp('po_reminder_delivery_date')->default(Carbon::now())->nullable();
            $table->timestamp('po_mr_received_date')->default(Carbon::now())->nullable();
            $table->timestamp('po_mr_custom_clearance')->default(Carbon::now())->nullable();
            $table->timestamp('po_mrr_received_date')->default(Carbon::now())->nullable();
            $table->timestamp('po_mrr_missing_date')->default(Carbon::now())->nullable();
            $table->timestamp('po_mrr_rejected_date')->default(Carbon::now())->nullable();
            $table->timestamp('po_invoice_received_date')->default(Carbon::now())->nullable();
            $table->string('po_penalty')->nullable();
            $table->timestamp('po_cover_invoice')->default(Carbon::now())->nullable();

            $table->boolean('po_completed')->nullable();

            $table->string('popath')->nullable();

            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('mr_id')->unsigned();
            $table->integer('vlist_id')->unsigned();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            /*
                        $table->foreign('mr_id')
                            ->references('id')
                            ->on('mrs')
                            ->onDelete('cascade');

                        $table->foreign('vlist_id')
                            ->references('id')
                            ->on('vlist')
                            ->onDelete('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pos');
    }

}
