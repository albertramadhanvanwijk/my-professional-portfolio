<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->public_id,
            'company' => $this->company,
            'company_description' => $this->company_description,
            'position' => $this->position,
            'employment_type' => $this->employment_type,
            'location' => $this->location,

            'start_date' => $this->start_date?->format('Y-m-d'),
            'end_date' => $this->end_date?->format('Y-m-d'),
            'is_current' => $this->is_current,

            'description' => $this->description,

            'highlights' => $this->whenLoaded(
                'highlights',
                fn () => $this->highlights->map(fn ($highlight) => [
                    'title' => $highlight->title,
                    'description' => $highlight->description,
                    'metric' => $highlight->metric,
                ])
            ),

            'skills' => $this->whenLoaded(
                'skills',
                fn () => $this->skills->map(fn ($skill) => [
                    'id' => $skill->public_id,
                    'name' => $skill->name,
                    'category' => $skill->category,
                    'evidence' => $skill->pivot->evidence,
                ])
            ),
        ];
    }
}