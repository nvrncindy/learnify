<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->decimal('rating', 3, 1)->default(0.0);

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
