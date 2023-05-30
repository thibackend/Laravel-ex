<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // khi nào thì gọi tới function up 
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->integer("price");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    // khi nào thì gọi tới function down?
    // thực hiện refresh thuc hien tao laij bang moi 
    // khi da co tabel rooms roi thi xoa no di
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
