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
    
        Schema::create('hospital', function (Blueprint $table) {
            $table->id();
            $table->string('hp_code9',20);
            $table->string('hp_code5',20); 
            $table->string('hp_code11',20);
            $table->string('hp_name'); 
            $table->string('hp_typecompany'); 
            $table->string('hp_type');  
            $table->string('hp_affiliation'); 
            $table->string('hp_department');
            $table->string('hp_usagestatus');
            $table->string('hp_uservicearea');
            $table->string('hp_address');
            $table->string('hp_province'); 
            $table->string('hp_district');  
            $table->string('hp_subdistrict');  
            $table->string('hp_moo');   
            $table->string('hp_portcode',150);  
            $table->string('hp_phone',50);  
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital');
    }
};
