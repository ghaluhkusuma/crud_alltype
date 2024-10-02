<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('jk');
            $table->string('golongandarah');
            $table->string('tempatlahir',25);
            // $table->date('tanggallahir');
            // $table->string('agama');
            // $table->string('hobi');
            // $table->string('email');
            // $table->string('alamat',100);
            // $table->string('image');
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
        Schema::dropIfExists('posts');
    }
};
