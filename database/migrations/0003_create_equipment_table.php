<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('serial_number')->unique();
            $table->enum('status', ['disponible', 'prestado', 'mantenimiento', 'dañado'])->default('disponible');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('equipment'); }
};