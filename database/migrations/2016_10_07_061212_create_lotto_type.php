<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLottoType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_lottos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // ชื่อของชนิดหมายเลข
            $table->integer('length'); // จำนวนอักขระของ ชนิดหมายเลข
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
        Schema::dropIfExists('type_lottos');
    }


    /* init default lotto type */
    private function init_default(){
        DB::table('type_lottos')->insert([
            ['name'=>'สามตัวบน', 'length'=>'3'], // 1
            ['name'=>'สามตัวโต๊ด', 'length'=>'3'], // 2
            ['name'=>'สามตัวล่าง', 'length'=>'3'], // 3
            ['name'=>'สองตัวบน', 'length'=>'2'], // 4
            ['name'=>'สองตัวโต๊ด', 'length'=>'2'], // 5
            ['name'=>'สองตัวล่าง', 'length'=>'2'], // 6
            ['name'=>'วิ่งบน', 'length'=>'1'], // 7
            ['name'=>'วิ่งล่าง', 'length'=>'1'], // 8
        ]);
    }
}
