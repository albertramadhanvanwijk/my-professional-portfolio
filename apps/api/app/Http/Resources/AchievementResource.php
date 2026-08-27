<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AchievementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->public_id,
            'title' => $this->title,
            'issuer' => $this->issuer,
            'date' => $this->date?->format('Y-m-d'),
            'description' => $this->description,
            'url' => $this->url,
        ];
    }
}