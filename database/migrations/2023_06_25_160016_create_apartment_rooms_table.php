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
        Schema::create('apartment_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landlord_id')->nullable();
            $table->unsignedBigInteger('apartment_id')->nullable();
            $table->string('apartment_type_id')->nullable();
            $table->unsignedBigInteger('tenant_id')->nullable();
            $table->string('rent_per_month')->nullable(); 
            $table->string('picture')->nullable();
            $table->string('slug')->nullable();   
            $table->foreign('landlord_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->foreign('apartment_type_id')->references('id')->on('apartment_types')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_rooms');
    }
};
