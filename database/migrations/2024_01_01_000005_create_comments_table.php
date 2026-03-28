<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->default('')->index()->constrained('posts', 'id')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->default('')->index()->constrained('users', 'id')->cascadeOnDelete();
            $table->string('author_name')->default('');
            $table->string('author_email')->default('');
            $table->text('body')->default('');
            $table->boolean('is_approved')->default('false')->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
