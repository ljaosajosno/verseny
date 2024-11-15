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
        
        Schema::create('competitions', function (Blueprint $table) {
            $table->id('competition_id'); 
            $table->string('name', 100);
            $table->year('year');
            $table->string('language', 100)->nullable();
            $table->integer('points_correct')->default(1);
            $table->integer('points_incorrect')->default(-1);
            $table->integer('points_blank')->default(0);
            $table->text('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
      
            $table->unique(['name', 'year']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
};
