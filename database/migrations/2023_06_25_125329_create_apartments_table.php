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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landlord_id')->nullable();
            $table->unsignedBigInteger('apartment_type_id')->nullable();
            $table->string('apartment_name')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('address')->nullable();
            $table->string('picture')->nullable();
            $table->string('slug')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('category_type')->nullable();
            $table->unsignedBigInteger('caretaker_id')->nullable();
            $table->foreign('landlord_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('caretaker_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('apartment_type_id')->references('id')->on('apartment_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
