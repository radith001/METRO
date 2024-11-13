<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReptilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reptils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type'); // Jenis reptil (misalnya, ular, kadal, kura-kura)
            $table->string('species'); // Spesies reptil
            $table->string('size'); // Ukuran reptil
            $table->decimal('price', 10, 2); // Harga reptil
            $table->text('description'); // Deskripsi produk
            $table->timestamps(); // Timestamps created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reptils');
    }
}
