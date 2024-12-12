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
        Schema::create('tasks', function (Blueprint $table) {
                $table->id(); // プライマリキー
                $table->string('title', 30);
                $table->text('contents', 140);
                $table->foreignId('user_id')->constrained(); // 外部キー制約（usersテーブルに紐づく）
                $table->string('prio'); // 優先順位（必須）
                $table->string('moto')->nullable(); // モチベーション（任意）
                $table->string('category')->nullable(); // 分類（任意）
                
                $table->timestamp('cob')->nullable(); // 締切日（任意）
                
                $table->timestamps(); // 自動的に created_at と updated_at を定義
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
