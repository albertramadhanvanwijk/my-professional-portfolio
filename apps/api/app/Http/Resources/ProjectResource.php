<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->public_id,
            'title' => $this->title,
            'slug' => $this->slug,

            'short_description' => $this->short_description,
            'description' => $this->description,

            'problem' => $this->problem,
            'solution' => $this->solution,

            'role' => $this->role,

            'architecture' => $this->architecture,
            'implementation' => $this->implementation,

            'challenges' => $this->challenges,
            'result' => $this->result,
            'lessons_learned' => $this->lessons_learned,

            'github_url' => $this->github_url,
            'live_url' => $this->live_url,

            'cover_image' => $this->cover_image,

            'featured' => $this->featured,
            'status' => $this->status,

            'started_at' => $this->started_at?->format('Y-m-d'),
            'completed_at' => $this->completed_at?->format('Y-m-d'),
            'published_at' => $this->published_at?->toISOString(),

            'technologies' => $this->whenLoaded(
                'technologies',
                fn () => $this->technologies->map(
                    fn ($technology) => $technology->name
                )->values()
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