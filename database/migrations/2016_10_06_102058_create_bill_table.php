<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id'); // id เจ้าของ
            $table->integer('section_id'); // id งวด
            $table->decimal('sum_price', 16, 6); // ยอดซื้อทั้งหมด ของ บิล
            $table->decimal('sum_discount', 16, 6); // ยอดส่วนลดทั้งหมด ของ บิล
            $table->decimal('sum_reward', 16, 6)->default('0.00'); // ยอดรางวัลทั้งหมด ของ บิล
            $table->decimal('sum_', 16, 6); // สุทธิ ของ บิล
            $table->string('note'); // หมายเหตุ ของ บิล
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
        Schema::dropIfExists('bills');
    }
}
