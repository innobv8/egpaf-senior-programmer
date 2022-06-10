<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionOneDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_one_districts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("region_id");
            $table->foreign("region_id")->references("id")->on("question_one_regions")->onDelete("cascade");
            $table->string('name');
            $table->integer('population');
            $table->integer('total_area');
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
        Schema::dropIfExists('question_one_districts');
    }
}
