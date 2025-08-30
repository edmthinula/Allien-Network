<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('allien_clans', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->string('location');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('allien_clans');
    }
};