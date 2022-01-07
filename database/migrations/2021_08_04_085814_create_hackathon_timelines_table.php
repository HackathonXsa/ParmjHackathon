<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon_timelines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hackathon_id')->references('id')->on('hackathons')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('position')->nullable();
            $table->text('body');
            $table->date('date');
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
        Schema::dropIfExists('hackathon_timelines');
    }
}
