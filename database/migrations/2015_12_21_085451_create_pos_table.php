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
            $table->timestamp('po_issued')->default(Carbon::now());
            $table->timestamp('po_confirmation')->default(Carbon::now());
            $table->timestamp('po_loaded_on_ideas')->default(Carbon::now());
            $table->timestamp('po_approved_on_ideas')->default(Carbon::now());
            $table->timestamp('po_memo_to_fin')->default(Carbon::now());
            $table->timestamp('po_delivery_date')->default(Carbon::now());
            $table->timestamp('po_reminder_delivery_date')->default(Carbon::now());
            $table->timestamp('po_mr_received_date')->default(Carbon::now());
            $table->timestamp('po_mrr_received_date')->default(Carbon::now());
            $table->timestamp('po_mrr_missing_date')->default(Carbon::now());
            $table->timestamp('po_mrr_rejected_date')->default(Carbon::now());
            $table->timestamp('po_invoice_received_date')->default(Carbon::now());
            $table->integer('po_penalty');
            $table->timestamp('po_cover_invoice')->default(Carbon::now());
            $table->timestamp('po_completed')->default(Carbon::now());
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
