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
        Schema::create('orders', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('order_status',['C','P'])->default('P');
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->enum('status',['1','0'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
