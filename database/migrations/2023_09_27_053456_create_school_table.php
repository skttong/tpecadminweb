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
            $table->string('sc_type',100);
            $table->string('sc_sector',100); 
            $table->string('sc_schoolnum',200);  
            $table->string('sc_schoolname');  
            $table->string('sc_subdistrict');  
            $table->string('sc_district');  
            $table->string('sc_province'); 
            $table->string('sc_area');  
            $table->string('sc_moo');  
            $table->string('sc_mooname');  
            $table->string('sc_portcode',150);  
            $table->string('sc_phone',50);  
            $table->string('sc_lat',100); 
            $table->string('sc_long',100);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school');
    }
};
