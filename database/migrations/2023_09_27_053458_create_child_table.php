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
    
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('prefix',20);
            $table->string('names',20); 
            $table->string('surnames',20);
            $table->string('idcard'); 
            $table->string('gender'); 
            $table->string('date_of_birth');  
            $table->string('age'); 
            $table->string('address');
            $table->string('subdistrict');
            $table->string('district');
            $table->string('province');
            $table->string('portcode'); 
            $table->string('phone');  
            $table->string('father');  
            $table->string('phone_f');   
            $table->string('mother');  
            $table->string('phone_m');  
            $table->string('schoolcode'); 
            $table->string('hcode9');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
