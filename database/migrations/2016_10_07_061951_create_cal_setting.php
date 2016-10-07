<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_cals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id'); // id ของ account การตั้งค่า
            $table->integer('lotto_type_id'); // id ของชนิดหมายเลข
            $table->decimal('discount_percent', 9, 6); // เปอร์เซนของ ส่วนลด
            $table->decimal('reward_percent', 9, 6); // เปอร์เซนของ รางวัล
            $table->timestamps();
        });

        $this->init_default();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_cals');
    }


    /* init admin cal setting */
    private function init_default(){
        DB::table('setting_cals')->insert([
            ['owner_id'=>'1', 'lotto_type_id'=>'1', 'discount_percent'=>'35', 'reward_percent'=>'550'],
            ['owner_id'=>'1', 'lotto_type_id'=>'2', 'discount_percent'=>'35', 'reward_percent'=>'105'],
            ['owner_id'=>'1', 'lotto_type_id'=>'3', 'discount_percent'=>'35', 'reward_percent'=>'125'],
            ['owner_id'=>'1', 'lotto_type_id'=>'4', 'discount_percent'=>'28', 'reward_percent'=>'70'],
            ['owner_id'=>'1', 'lotto_type_id'=>'5', 'discount_percent'=>'28', 'reward_percent'=>'12'],
            ['owner_id'=>'1', 'lotto_type_id'=>'6', 'discount_percent'=>'28', 'reward_percent'=>'70'],
            ['owner_id'=>'1', 'lotto_type_id'=>'7', 'discount_percent'=>'12', 'reward_percent'=>'3'],
            ['owner_id'=>'1', 'lotto_type_id'=>'8', 'discount_percent'=>'12', 'reward_percent'=>'4']
        ]);
    }
}
