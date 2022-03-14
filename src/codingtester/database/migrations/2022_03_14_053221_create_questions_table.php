<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('question_id');
            $table->string('title');
            $table->string('lead');
            $table->string('photo');
            $table->string('prerequisites');
            $table->string('input');
            $table->string('output');
            $table->string('conditions');
            $table->string('input_example1');
            $table->string('output_example2');
            $table->string('output_example1');
            $table->string('input_example2');
            $table->string('remarks');
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
        Schema::dropIfExists('questions');
    }
}
