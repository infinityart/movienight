<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug_reports', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->integer('user_id', 10);
            $table->string('title', 255);
            $table->text('description');
            $table->string('img_url', 255);
            $table->integer('votes', 10);
            $table->tinyInteger('status', 1);
            $table->timestamp('created_at');

            $table->index(['title', 'created_at', 'votes']);

            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('bug_reports');
    }
}
