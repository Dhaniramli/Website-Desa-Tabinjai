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
        Schema::create('hamlet_offices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hamlet_id');
            $table->string('image');
            $table->string('name');
            $table->string('position');
            $table->timestamps();

            $table->foreign('hamlet_id')->references('id')->on('hamlets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hamlet_offices');
    }
};
