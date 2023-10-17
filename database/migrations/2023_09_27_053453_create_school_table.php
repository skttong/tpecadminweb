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
        Schema::create('school', function (Blueprint $table) {
            $table->id();
            $table->string('sc_type',100)->unique();
            $table->string('sc_sector',100)->unique(); 
            $table->string('sc_schoolnum',200)->unique();  
            $table->string('sc_schoolname')->unique();  
            $table->string('sc_subdistrict')->unique();  
            $table->string('sc_district')->unique();  
            $table->string('sc_province')->unique(); 
            $table->string('sc_area')->unique();  
            $table->string('sc_moo')->unique();  
            $table->string('sc_mooname')->unique();  
            $table->string('sc_portcode',150)->unique();  
            $table->string('sc_phone',50)->unique();  
            $table->string('sc_lat',100)->unique(); 
            $table->string('sc_long',100)->unique();  
            $table->timestamps();
        });
    
        Schema::create('hospital', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school');
        Schema::dropIfExists('hospital');
    }
};
