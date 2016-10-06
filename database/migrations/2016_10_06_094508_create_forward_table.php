<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forwards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lotto_id'); // id หมายเลข
            $table->integer('bill_id'); // id บิล
            $table->integer('section_id'); // id งวด
            $table->integer('owner_id'); // id เจ้าของ
            $table->integer('middleman_id'); // id ผู้ส่ง
            $table->integer('agent_id'); // id ผู้รับ
            $table->decimal('price', 16, 6); // ราคาส่ง ของ ผู้ส่ง
            $table->decimal('discount_percent', 5, 6); // เปอเซ็นส่วนลด ของ ผู้ส่ง
            $table->decimal('reward_percent', 5, 6); // เปอเซ็นรางวัล ของ ผู้ส่ง
            $table->decimal('discount', 16, 6); // ส่วนลดที่ได้ ของ ผู้ส่ง
            $table->decimal('reward', 16, 6)->default('0.00'); // รางวัลที่ได้ ของ ผู้ส่ง
            $table->decimal('sum', 16, 6); // ยอดสุทธิของ ผู้ส่ง
            $table->string('status')->default('buy'); // สถานะการส่ง
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forwards');
    }
}
