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
        Schema::create('quota_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained()->onDelete('cascade'); // Foreign key for vendor
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('vessel_name');
            $table->string('voyage_number');
            $table->string('imo_number');
            $table->dateTime('eta');
            $table->string('agents');
            $table->string('request_type');
            $table->text('service_description');
            $table->string('tob_cleaning');
            $table->text('equipment_description');
            $table->text('last_5_cargo');
            $table->json('hold_images'); // Store hold images as JSON or store them separately (e.g., file paths)
            $table->text('iframe_code')->nullable();
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->string('company_address');
            $table->string('form_filler_name');
            $table->string('email');
            $table->string('mobile');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quota_requests');
    }
};
