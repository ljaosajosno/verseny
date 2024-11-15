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
        Schema::create('rounds', function (Blueprint $table) {
            $table->id('round_id');
            $table->foreignId('competition_id')
                  ->constrained('competitions', 'competition_id') 
                  ->onDelete('cascade');
            $table->string('round_name', 100);
            $table->date('round_date')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('rounds');
    }
};
