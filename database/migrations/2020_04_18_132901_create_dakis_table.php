<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDakisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dakis', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('regu_id');
            $table->string('operator_id');
            $table->string('tanggal_mendaki');
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
        Schema::dropIfExists('dakis');
    }
}
