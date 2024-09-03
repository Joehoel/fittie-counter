<?php

use App\Models\User;
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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignIdFor(User::class, 'user_one_id')->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'user_two_id')->cascadeOnDelete();
            $table->integer('user_one_score')->default(0);
            $table->integer('user_two_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
