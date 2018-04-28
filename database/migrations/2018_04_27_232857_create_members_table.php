<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enumber')->index()->comment('编号');
            $table->string('password')->comment('身份证号码后6位');
            $table->string('id_number')->index()->comment('身份证号码');
            $table->string('name')->index()->comment('真实姓名');
            $table->string('group')->nullable()->index();
            $table->string('phone')->nullable()->index();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('members');
    }
}
