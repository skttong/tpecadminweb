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
    
        Schema::create('district', function (Blueprint $table) {
            $table->id('DISTRICT_ID');
            $table->string('DISTRICT_CODE',6);
            $table->string('DISTRICT_NAME',150);
            $table->string('AMPHUR_ID',5);
            $table->string('PROVINCE_ID',5);
            $table->string('GEO_ID',5);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('district');
    }
};
