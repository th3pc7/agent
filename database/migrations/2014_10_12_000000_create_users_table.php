<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('class'); // class ของ account
            $table->decimal('percent', 9, 6); // เปอร์เซ็นของ account
            $table->decimal('credit', 16, 6); // เครดิตของ account
            $table->decimal('balance', 16, 6); // ยอดได้เสียของ account
            $table->integer('agent_id')->nullable(); // id ของเอเย่น account
            $table->text('user_map'); // id,id,id,id,id,id เรียงจาก เอเย่นต์บนสุดมาหา account
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
        Schema::drop('users');
    }


    /* init Admin account */
    private function init_default(){
        DB::table('users')->insert(
            array(
                'name' => 'Admin_lotto',
                'email' => 'admin',
                'password' => md5('Password'),
                'percent' => '100',
                'credit' => '1000000000',
                'balance' => '0',
                'user_map' => '1'
            )
        );
    }
}
