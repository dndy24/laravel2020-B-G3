<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerlengkapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perlengkapans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('regu_id');
            $table->string('surat_ijin');
            $table->string('p3k');
            $table->string('navigasi');
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
        Schema::dropIfExists('perlengkapans');
    }
}
