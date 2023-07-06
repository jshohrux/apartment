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
        Schema::create('arizas', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('passport')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->unsignedBigInteger('specialty_id')->nullable();
            $table->integer('course')->nullable();
            $table->integer('gender')->nullable();
            $table->string('city')->nullable();
            $table->integer('status')->default(0);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('apartment_id')->nullable();
            $table->integer('floor')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->string('photo')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arizas');
    }
};
