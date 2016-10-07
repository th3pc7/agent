<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('one')->default('false'); // รางวัลที่ 1
            $table->string('bot3_1')->default('false'); // สามตัวล่าง 1
            $table->string('bot3_2')->default('false'); // สามตัวล่าง 2
            $table->string('bot3_3')->default('false'); // สามตัวล่าง 3
            $table->string('bot3_4')->default('false'); // สามตัวล่าง 4
            $table->string('bot2')->default('false'); // สองตัวล่าง
            $table->date('date'); // วันที่ ของ งวด
            $table->timestamp('time_close'); // เวลาปิดรับ
            $table->integer('success_id'); // id ของผู้ออกรางวัล
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
        Schema::dropIfExists('sections');
    }
}
