<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default('')->index()->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('category_id')->default('')->index()->constrained('categories', 'id')->cascadeOnDelete();
            $table->string('title')->default('');
            $table->string('slug')->default('')->unique();
            $table->text('excerpt')->nullable()->default('');
            $table->text('body')->default('');
            $table->string('featured_image')->nullable()->default('');
            $table->string('status')->default('draft')->index();
            $table->timestamp('published_at')->nullable()->default('')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
