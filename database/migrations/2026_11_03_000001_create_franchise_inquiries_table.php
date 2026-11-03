<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('franchise_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact_number', 50);
            $table->string('email');
            $table->string('preferred_location');
            $table->string('investment_budget', 100);
            $table->text('message')->nullable();
            $table->string('status')->default('New')->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('franchise_inquiries');
    }
};
