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
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('phone_number', 25)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('system_name', 150)->nullable();
            $table->string('copyright_text', 150)->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->longText('description')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_settings');
    }
};
