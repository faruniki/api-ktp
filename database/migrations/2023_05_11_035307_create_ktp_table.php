<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->char('nik',16)->unique();
            $table->string('nama',75);
            $table->string('tmplahir',20);
            $table->char('tgllahir');
            $table->char('jk',1);
            $table->char('darah',2);
            $table->text('alamat');
            $table->char('rt',3);
            $table->char('rw',3);
            $table->string('desa',75);
            $table->string('provinsi',75);
            $table->string('kecamatan',75);
            $table->string('agama',15);
            $table->string('status');
            $table->string('pekerjaan',35);
            $table->char('kewarganegaraan',3);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp');
    }
};
