<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    
        Schema::create('eq15611', function (Blueprint $table) {
            $table->id();
            $table->string('child_id',20);
            $table->string('r1',20); 
            $table->string('r2',20);
            $table->string('r3',20); 
            $table->string('r4',20);
            $table->string('r5',20); 
            $table->string('r6',20); 
            $table->string('r7',20); 
            $table->string('r8',20);
            $table->string('r9',20); 
            $table->string('r10',20);
            $table->string('r11',20); 
            $table->string('r12',20); 
            $table->string('r13',20); 
            $table->string('r14',20);
            $table->string('r15',20); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eq15611');
    }
};
