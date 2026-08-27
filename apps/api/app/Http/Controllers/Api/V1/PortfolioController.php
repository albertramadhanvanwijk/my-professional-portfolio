<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AchievementResource;
use App\Http\Resources\CertificationResource;
use App\Http\Resources\EducationResource;
use App\Http\Resources\ExperienceResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\SkillResource;
use App\Http\Resources\SocialLinkResource;
use App\Http\Resources\ProfileResource;
use App\Models\Achievement;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Profile;

class PortfolioController extends Controller
{
    public function profile()
    {
        $profile = Profile::query()->firstOrFail();

        return new ProfileResource($profile);
    }

    public function experiences()
    {
        $experiences = Experience::query()
            ->with([
                'highlights',
                'skills',
            ])
            ->orderBy('sort_order')
            ->orderByDesc('start_date')
            ->get();

        return ExperienceResource::collection($experiences);
    }

    public function education()
    {
        $education = Education::query()
            ->orderByDesc('end_date')
            ->get();

        return EducationResource::collection($education);
    }

    public function skills()
    {
        $skills = Skill::query()
            ->orderBy('category')
            ->orderBy('sort_order')
            ->get();

        return SkillResource::collection($skills);
    }

    public function projects()
    {
        $projects = Project::query()
            ->where('status', 'published')
            ->with([
                'technologies',
                'skills',
            ])
            ->orderByDesc('featured')
            ->orderByDesc('published_at')
            ->get();

        return ProjectResource::collection($projects);
    }

    public function project(Project $project)
    {
        abort_if(
            $project->status !== 'published',
            404
        );

        $project->load([
            'technologies',
            'skills',
        ]);

        return new ProjectResource($project);
    }

    public function certifications()
    {
        return CertificationResource::collection(
            Certification::query()
                ->orderByDesc('issued_at')
                ->get()
        );
    }

    public function achievements()
    {
        return AchievementResource::collection(
            Achievement::query()
                ->orderBy('sort_order')
                ->get()
        );
    }

    public function socialLinks()
    {
        return SocialLinkResource::collection(
            SocialLink::query()
                ->orderBy('sort_order')
                ->get()
        );
    }
}