<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyakitObatTable extends Migration
{
    public function up()
    {
        Schema::create('penyakit_obat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyakit_id');
            $table->unsignedBigInteger('obat_id');
            $table->timestamps();

            $table->foreign('penyakit_id')->references('id')->on('penyakit')->onDelete('cascade');
            $table->foreign('obat_id')->references('id')->on('obat')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyakit_obat');
    }
}
