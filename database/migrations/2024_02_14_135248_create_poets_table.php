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
        Schema::create('poets', function (Blueprint $table) {
            $table->id();
            $table->string('pen_name');
            $table->string('real_name');
            $table->string('slug')->unique();
            $table->string('cover_image');
            $table->string('poet_image');
            $table->date('date_of_birth');
            $table->date('death_date');
            $table->string('birth_place');
            $table->string('google_map');
            $table->text('bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poets');
    }
};
