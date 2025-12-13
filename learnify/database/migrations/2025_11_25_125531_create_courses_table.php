<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('description');
            $table->integer('price');
            $table->decimal('rating');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
