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
    
        Schema::create('dspm', function (Blueprint $table) {
            $table->id();
            $table->string('child_id',20);
            $table->string('DSPM_01',20);
            $table->string('DSPM_02',20);
            $table->string('DSPM_03',20);
            $table->string('DSPM_04',20);
            $table->string('DSPM_05',20);
            $table->string('DSPM_06',20);
            $table->string('DSPM_07',20);
            $table->string('DSPM_08',20);
            $table->string('DSPM_09',20);
            $table->string('DSPM_10',20);
            $table->string('DSPM_11',20);
            $table->string('DSPM_12',20);
            $table->string('DSPM_13',20);
            $table->string('DSPM_14',20);
            $table->string('DSPM_15',20);
            $table->string('DSPM_16',20);
            $table->string('DSPM_17',20);
            $table->string('DSPM_18',20);
            $table->string('DSPM_19',20);
            $table->string('DSPM_20',20); 
            $table->string('DSPM_21',20);
            $table->string('DSPM_22',20);
            $table->string('DSPM_23',20);
            $table->string('DSPM_24',20);
            $table->string('DSPM_25',20);
            $table->string('DSPM_26',20);
            $table->string('DSPM_27',20);
            $table->string('DSPM_28',20);
            $table->string('DSPM_29',20);
            $table->string('DSPM_30',20); 
            $table->string('DSPM_31',20);
            $table->string('DSPM_32',20);
            $table->string('DSPM_33',20);
            $table->string('DSPM_34',20);
            $table->string('DSPM_35',20);
            $table->string('DSPM_36',20);
            $table->string('DSPM_37',20);
            $table->string('DSPM_38',20);
            $table->string('DSPM_39',20);
            $table->string('DSPM_40',20); 
            $table->string('DSPM_41',20);
            $table->string('DSPM_42',20);
            $table->string('DSPM_43',20);
            $table->string('DSPM_44',20);
            $table->string('DSPM_45',20);
            $table->string('DSPM_46',20);
            $table->string('DSPM_47',20);
            $table->string('DSPM_48',20);
            $table->string('DSPM_49',20);
            $table->string('DSPM_50',20);
            $table->string('DSPM_51',20);
            $table->string('DSPM_52',20);
            $table->string('DSPM_53',20);
            $table->string('DSPM_54',20);
            $table->string('DSPM_55',20);
            $table->string('DSPM_56',20);
            $table->string('DSPM_57',20);
            $table->string('DSPM_58',20);
            $table->string('DSPM_59',20);
            $table->string('DSPM_60',20);
            $table->string('DSPM_61',20);
            $table->string('DSPM_62',20);
            $table->string('DSPM_63',20);
            $table->string('DSPM_64',20);
            $table->string('DSPM_65',20);
            $table->string('DSPM_66',20);
            $table->string('DSPM_67',20);
            $table->string('DSPM_68',20);
            $table->string('DSPM_69',20);
            $table->string('DSPM_70',20);
            $table->string('DSPM_71',20);
            $table->string('DSPM_72',20);
            $table->string('DSPM_73',20);
            $table->string('DSPM_74',20);
            $table->string('DSPM_75',20);
            $table->string('DSPM_76',20);
            $table->string('DSPM_77',20);
            $table->string('DSPM_78',20);
            $table->string('DSPM_79',20);
            $table->string('DSPM_80',20);  
            $table->string('DSPM_81',20);
            $table->string('DSPM_82',20);
            $table->string('DSPM_83',20);
            $table->string('DSPM_84',20);
            $table->string('DSPM_85',20);
            $table->string('DSPM_86',20);
            $table->string('DSPM_87',20);
            $table->string('DSPM_88',20);
            $table->string('DSPM_89',20);
            $table->string('DSPM_90',20);
            $table->string('DSPM_91',20);
            $table->string('DSPM_92',20);
            $table->string('DSPM_93',20);
            $table->string('DSPM_94',20);
            $table->string('DSPM_95',20);
            $table->string('DSPM_96',20);
            $table->string('DSPM_97',20);
            $table->string('DSPM_98',20);
            $table->string('DSPM_99',20);
            $table->string('DSPM_100',20);
            $table->string('DSPM_101',20);
            $table->string('DSPM_102',20);
            $table->string('DSPM_103',20);
            $table->string('DSPM_104',20);
            $table->string('DSPM_105',20);
            $table->string('DSPM_106',20);
            $table->string('DSPM_107',20);
            $table->string('DSPM_108',20);
            $table->string('DSPM_109',20);
            $table->string('DSPM_110',20);
            $table->string('DSPM_111',20);
            $table->string('DSPM_112',20);
            $table->string('DSPM_113',20);
            $table->string('DSPM_114',20);
            $table->string('DSPM_115',20);
            $table->string('DSPM_116',20);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dspm');
    }
};
