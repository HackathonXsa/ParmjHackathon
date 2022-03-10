<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon_users', function (Blueprint $table) {

            $table->id();
            $table->foreignId('hackathon_id')->references('id')->on('hackathons')->constrained()->onDelete('cascade');
            $table->string('hackathon_name');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('birthdate');
            //$table->string('age');
            $table->text('team_name')->nullable();
            $table->text('role')->nullable();
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
        Schema::dropIfExists('hackathon_users');
    }
}
