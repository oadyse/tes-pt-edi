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
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_biodata')->nullable()->references('id')->on('biodata');
            $table->enum('jenjang', ['SMA/SMK', 'Diploma', 'S1', 'S2', 'S3']);
            $table->string('institusi');
            $table->string('jurusan');
            $table->year('tahun_lulus');
            $table->float('ipk');
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
        Schema::dropIfExists('pendidikan');
    }
};
