<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hackathon_id')->references('id')->on('hackathons')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('hackathon_image')->nullable();
            $table->text('body');
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
        Schema::dropIfExists('hackathon_fields');
    }
}
