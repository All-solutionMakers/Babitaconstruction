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
        Schema::create('vehicleregistations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_id');
            $table->foreign('register_id')->references('id')->on('registations');
            $table->string('vehicle_no');
            $table->string('model');
            $table->unsignedBigInteger('vehicle_type');
            $table->foreign('vehicle_type')->references('id')->on('vehicle_typelists');
            $table->enum('listed_by', ['owner', 'third-party']);
            $table->unsignedBigInteger('agreement_id');
            $table->foreign('agreement_id')->references('id')->on('agreement_period');
            $table->unsignedBigInteger('transaction_methord_id');
            $table->foreign('transaction_methord_id')->references('id')->on('transaction_methord');
            $table->longText('vehicle_front_img')->nullable();
            $table->longText('vehicle_left_side_img')->nullable();
            $table->longText('vehicle_right_side_img')->nullable();
            $table->longText('vehicle_back_img')->nullable();
            $table->longText('permit')->nullable();
            $table->longText('polution')->nullable();
            $table->longText('particular')->nullable();
            $table->longText('fitness')->nullable();
            $table->longText('rc')->nullable();
            $table->longText('expected_price')->nullable();
            $table->enum('register_type', ['lease vehicle', 'sale default vehicle']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicleregistations');
    }
};