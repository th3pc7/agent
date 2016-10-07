<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLimitSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_limits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_id'); // id ของเอเย่นต์
            $table->string('type_lotto'); // id ของชนิด lotto
            $table->string('number_lotto'); // หมายเลขที่อั้น
            $table->decimal('price_limit', 16, 6); // จำนวนที่อั้นไว้
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
        Schema::dropIfExists('setting_limits');
    }
}
