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
        Schema::create('menus', function (Blueprint $table) { // ✅ Changed 'menu' to 'menus'
            $table->id();
            $table->string('name')->nullable();
            $table->string('file')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable(); // ✅ Fixed spelling (was 'dscription')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
