<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon_pages', function (Blueprint $table) {
            $table->primary('hackathon_id');
            $table->foreignId('hackathon_id')->references('id')->on('hackathons')->constrained()->onDelete('cascade');
            $table->text('first_description')->nullable();
            $table->text('second_description')->nullable();
            $table->text('about')->nullable();
            $table->text('challanges')->nullable();
            $table->text('fields')->nullable();
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
        Schema::dropIfExists('hackathon_pages');
    }
}
