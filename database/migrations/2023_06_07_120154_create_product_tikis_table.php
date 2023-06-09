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
        Schema::create('product_tikis', function (Blueprint $table) {
            $table->increments("id");
            $table->string("img");
            $table->string("name");
            $table->integer("star");
            $table->float("price",8,2);
            $table->integer("sale_number");
            $table->integer("promote");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tikis');
    }
};
