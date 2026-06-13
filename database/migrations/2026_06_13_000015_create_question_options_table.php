<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Universal options table serving all question types:
     * - mcq / multiple / true_false  -> label + is_correct
     * - matching                     -> match_left + match_right
     * - ordering                     -> label + correct_position
     * - open                         -> no rows (graded manually / by AI)
     */
    public function up(): void
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained()->cascadeOnDelete();
            $table->text('label')->nullable();
            $table->boolean('is_correct')->default(false);
            $table->string('match_left')->nullable();
            $table->string('match_right')->nullable();
            $table->unsignedInteger('correct_position')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index(['question_id', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_options');
    }
};
