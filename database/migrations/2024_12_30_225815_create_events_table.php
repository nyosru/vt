<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('название мероприятия');
            $table->string('photo_path')->comment('фотка главная');
            $table->date('date')->comment('дата проведения или начала если есть дата финиша');
            $table->date('date_finish')->nullable()->comment('дата окончания мероприятия');
            $table->boolean('show')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
