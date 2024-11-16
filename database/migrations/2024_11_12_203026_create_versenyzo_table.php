<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('competitors', function (Blueprint $table) {
            $table->id('competitor_id');
            
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->foreignId('competition_id')->constrained('competitions', 'competition_id')->onDelete('cascade');
            $table->foreignId('round_id')->nullable()->constrained('rounds', 'round_id')->onDelete('set null');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('competitors');
    }
};
