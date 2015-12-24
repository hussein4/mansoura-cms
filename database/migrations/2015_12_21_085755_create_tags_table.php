<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('vlist_tag', function (Blueprint $table)
        {
            $table->integer('vlist_id')->unsigned()->index();
            $table->foreign('vlist_id')->references('id')->on('vlist')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps();

        });

        Schema::create('mrs_tag', function (Blueprint $table)
        {
            $table->integer('mr_id')->unsigned()->index();
            $table->foreign('mr_id')->references('id')->on('mrs')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps();

        });

        Schema::create('pos_tag', function (Blueprint $table)
        {
            $table->integer('po_id')->unsigned()->index();
            $table->foreign('po_id')->references('id')->on('pos')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        //   DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('pos_tag');
        Schema::dropIfExists('mrs_tag');
        Schema::dropIfExists('vlist_tag');
        Schema::dropIfExists('tags');
    }
}
