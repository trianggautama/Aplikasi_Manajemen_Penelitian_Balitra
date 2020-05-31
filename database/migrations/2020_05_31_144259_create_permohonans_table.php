<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->unsignedBigInteger('objek_penelitian_id');
            $table->string('nama', 100);
            $table->string('NIK', 50);
            $table->string('alamat', 100);
            $table->string('no_hp', 13);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir', 5);
            $table->text('keperluan');
            $table->date('tanggal_pemanggilan')->nullable();
            $table->string('lampiran', 50)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->foreign('objek_penelitian_id')->references('id')->on('objek_penelitians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonans');
    }
}
