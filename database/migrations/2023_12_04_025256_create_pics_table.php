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
        Schema::create('pics', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('pic_name');
            $table->string('pic_phone');
            $table->string('pic_email');
            $table->integer('agency_id');
            $table->string('agency_name');
            $table->string('pic_image');
            $table->string('pic_roles');
            $table->string('description');
            $table->integer('sequence');
            $table->boolean('is_active');
            $table->boolean('is_pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pics');
    }
};
