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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('phone');
            $table->string('description');
            $table->boolean('status'); // Matrículado ou transferido
            $table->string('grade')->nullable();
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migratimage.pngions.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
