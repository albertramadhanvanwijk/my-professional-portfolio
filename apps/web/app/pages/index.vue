<script setup lang="ts">
import { useSeoMeta } from '#imports'
import { usePortfolioApi } from '~~/composable/usePortfolioApi'

const api = usePortfolioApi()

const [
  profileResponse,
  experiencesResponse,
  projectsResponse,
  skillsResponse,
] = await Promise.all([
  api.getProfile(),
  api.getExperiences(),
  api.getProjects(),
  api.getSkills(),
])

const profile = profileResponse.data
const experiences = experiencesResponse.data
const projects = projectsResponse.data
const skills = skillsResponse.data

useSeoMeta({
  title: `${profile.name} — ${profile.headline}`,
  description: profile.short_bio ?? undefined,
  ogTitle: `${profile.name} — ${profile.headline}`,
  ogDescription: profile.short_bio ?? undefined,
  twitterCard: 'summary_large_image',
})
</script>

<template>
  <main>

    <!-- HERO -->
    <section class="hero">
      <div class="container">

        <p class="eyebrow">
          {{ profile.headline }}
        </p>

        <h1>
          {{ profile.name }}
        </h1>

        <p class="hero-description">
          {{ profile.short_bio }}
        </p>

        <div class="hero-actions">
          <NuxtLink to="#projects">
            View Projects
          </NuxtLink>

          <NuxtLink to="#contact">
            Contact Me
          </NuxtLink>
        </div>

      </div>
    </section>


    <!-- ABOUT -->
    <section class="section">
      <div class="container">

        <p class="section-label">
          About
        </p>

        <h2>
          Building digital experiences with code and design.
        </h2>

        <p>
          {{ profile.long_bio }}
        </p>

      </div>
    </section>


    <!-- EXPERIENCE -->
    <section class="section">
      <div class="container">

        <p class="section-label">
          Experience
        </p>

        <div
          v-for="experience in experiences"
          :key="experience.id"
          class="experience"
        >

          <div>
            <p>
              {{ experience.position }}
            </p>

            <h3>
              {{ experience.company }}
            </h3>

            <small>
              {{ experience.location }}
            </small>
          </div>

          <div>

            <p>
              {{ experience.description }}
            </p>

            <ul>
              <li
                v-for="highlight in experience.highlights"
                :key="highlight.title"
              >
                <strong>
                  {{ highlight.title }}
                </strong>

                <span>
                  {{ highlight.description }}
                </span>

                <small v-if="highlight.metric">
                  {{ highlight.metric }}
                </small>
              </li>
            </ul>

          </div>

        </div>

      </div>
    </section>


    <!-- PROJECTS -->
    <section
      id="projects"
      class="section"
    >
      <div class="container">

        <p class="section-label">
          Selected Projects
        </p>

        <div class="project-grid">

          <article
            v-for="project in projects"
            :key="project.id"
            class="project-card"
          >

            <p v-if="project.featured">
              Featured Project
            </p>

            <h3>
              {{ project.title }}
            </h3>

            <p>
              {{ project.short_description }}
            </p>

            <div class="technology-list">
              <span
                v-for="technology in project.technologies"
                :key="technology"
              >
                {{ technology }}
              </span>
            </div>

            <NuxtLink
              :to="`/projects/${project.slug}`"
            >
              View case study →
            </NuxtLink>

          </article>

        </div>

      </div>
    </section>


    <!-- SKILLS -->
    <section class="section">
      <div class="container">

        <p class="section-label">
          Skills
        </p>

        <div class="skills-grid">

          <div
            v-for="skill in skills"
            :key="skill.id"
            class="skill"
          >
            {{ skill.name }}
          </div>

        </div>

      </div>
    </section>


    <!-- CONTACT -->
    <section
      id="contact"
      class="section"
    >
      <div class="container">

        <p class="section-label">
          Contact
        </p>

        <h2>
          Let's build something meaningful.
        </h2>

        <a
          v-if="profile.email"
          :href="`mailto:${profile.email}`"
        >
          {{ profile.email }}
        </a>

      </div>
    </section>

  </main>
</template>