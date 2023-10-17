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
    
        Schema::create('province', function (Blueprint $table) {
            $table->id('PROVINCE_ID');
            $table->string('PROVINCE_CODE',2);
            $table->string('PROVINCE_NAME',150); 
            $table->string('GEO_ID');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};
