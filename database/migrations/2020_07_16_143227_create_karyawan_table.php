<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable(false);
            $table->string('nik',50)->nullable(false)->unique();
            $table->string('telp',20)->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status',['aktif','non aktif'])->default('aktif');
            $table->timestamps();
            $table->date('tglm');
            $table->date('tgls')->nullable();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
