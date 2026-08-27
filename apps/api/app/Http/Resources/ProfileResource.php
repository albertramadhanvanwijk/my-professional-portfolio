<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->public_id,
            'name' => $this->name,
            'headline' => $this->headline,
            'short_bio' => $this->short_bio,
            'long_bio' => $this->long_bio,
            'location' => $this->location,
            'email' => $this->email,
            'github_url' => $this->github_url,
            'linkedin_url' => $this->linkedin_url,
            'website_url' => $this->website_url,
            'available_for_work' => $this->available_for_work,
        ];
    }
}