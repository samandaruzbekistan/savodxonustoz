<?php

namespace App\Models;

use App\Enums\AiGenerationStatus;
use App\Enums\AiGenerationType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiGeneration extends Model
{
    protected $fillable = [
        'user_id',
        'ai_conversation_id',
        'type',
        'prompt',
        'parameters',
        'output',
        'status',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => AiGenerationType::class,
            'status' => AiGenerationStatus::class,
            'parameters' => 'array',
            'output' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(AiConversation::class, 'ai_conversation_id');
    }
}
