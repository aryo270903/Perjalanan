<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_user');
            $table->string('tgl_perjalanan');
            $table->string('jam');
            $table->string('lokasi');
            $table->string('suhu_tubuh');
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
        Schema::dropIfExists('peralanans');
    }
}
