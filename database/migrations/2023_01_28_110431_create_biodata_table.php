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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable()->references('id')->on('users');
            $table->string('nama');
            $table->string('posisi');
            $table->bigInteger('no_ktp')->length(16);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen Protestan', 'Katolik', 'Hindu', 'Budha', 'Konghucu', 'Lainnya']);
            $table->enum('gol_darah', ['A', 'AB', 'B', 'O']);
            $table->enum('status', ['Belum Menikah', 'Menikah', 'Cerai Hidup', 'Cerai Mati']);
            $table->longText('alamat_ktp');
            $table->longText('alamat_domisili');
            $table->string('email');
            $table->string('no_hp', 14);
            $table->string('close_person');
            $table->longText('skills');
            $table->boolean('placement');
            $table->integer('salary')->length(10);
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
        Schema::dropIfExists('biodata');
    }
};
