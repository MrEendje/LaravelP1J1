<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 8, 2);
            $table->date('effdate');
            $table->unsignedInteger('productid');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
