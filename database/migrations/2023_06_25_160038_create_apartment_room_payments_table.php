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
        Schema::create('apartment_room_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landlord_id')->nullable();
            $table->unsignedBigInteger('apartment_id')->nullable();
            $table->string('room_id')->nullable();
            $table->unsignedBigInteger('tenant_id')->nullable();
            $table->string('paid_for_month')->nullable(); 
            $table->string('slug')->nullable();   
            $table->foreign('landlord_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('apartment_rooms')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_room_payments');
    }
};
