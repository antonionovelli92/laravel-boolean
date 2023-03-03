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
        Schema::create('eggs', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('color');
            $table->boolean('contains')->default(0);
            $table->string('chocolate');
            $table->text('description');
            $table->text('thumb')->nullable();
            $table->enum('size', ['S', 'M', 'L', 'XL']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eggs');
    }
};
