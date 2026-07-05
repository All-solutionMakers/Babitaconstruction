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
        Schema::create('vehicle_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_request_id');
            $table->string('vehicle_request_type');
            $table->enum('request_type', ['purchase sale', 'sale default vehicle', 'lease vehicle']);
            $table->enum('status', ['accepted', 'rejected']);
            $table->unsignedBigInteger('allocated_to')->nullable();
            $table->timestamp('allocated_datetime')->nullable();
            $table->timestamps();

            // Add a unique constraint to prevent duplicate vehicle_request_id and vehicle_request_type
            $table->unique(['vehicle_request_id', 'vehicle_request_type']);

            // Optionally add indexes for better query performance
            $table->index(['vehicle_request_id', 'vehicle_request_type']);

            // Add a unique constraint for allocated_to, excluding NULL values
            $table->unique('allocated_to');

            // Define the foreign key constraint for allocated_to
            $table->foreign('allocated_to')->references('id')->on('admins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_requests');
    }
};
