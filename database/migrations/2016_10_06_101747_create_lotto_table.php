<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLottoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id'); // id เจ้าของ
            $table->integer('section_id'); // id งวด
            $table->decimal('price', 16, 6); // ราคาที่ซื้อ
            $table->decimal('discount_percent', 5, 6); // เปอเซ็นส่วนลด ของ เจ้าของ
            $table->decimal('reward_percent', 5, 6); // เปอเซ็นรางวัล ของ เจ้าของ
            $table->decimal('discount', 16, 6); // ส่วนลดที่ได้ ของ เจ้าของ
            $table->decimal('reward', 16, 6)->default('0.00'); // รางวัลที่ได้ ของ เจ้าของ
            $table->decimal('sum', 16, 6); // ยอดสุทธิของ เจ้าของ
            $table->string('status')->default('buy'); // สถานะ ของ หมายเลข
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
        Schema::dropIfExists('lottos');
    }
}
