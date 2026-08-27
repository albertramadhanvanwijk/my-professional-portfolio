<script setup lang="ts">
import type { Project } from '~/types/portfolio'

const route = useRoute()

const api = usePortfolioApi()

const response = await api.getProject(
  route.params.slug as string
)

const project = response.data

useSeoMeta({
  title: `${project.title} — Albert Ramadhan Van Wijk`,
  description: project.short_description ?? undefined,
})
</script>

<template>
  <main class="project-page">

    <section class="hero">
      <div class="container">

        <p class="eyebrow">
          Case Study
        </p>

        <h1>
          {{ project.title }}
        </h1>

        <p>
          {{ project.short_description }}
        </p>

      </div>
    </section>


    <section class="section">
      <div class="container">

        <div v-if="project.description">
          <h2>Overview</h2>

          <p>
            {{ project.description }}
          </p>
        </div>


        <div v-if="project.problem">
          <h2>Problem</h2>

          <p>
            {{ project.problem }}
          </p>
        </div>


        <div v-if="project.solution">
          <h2>Solution</h2>

          <p>
            {{ project.solution }}
          </p>
        </div>


        <div v-if="project.architecture">
          <h2>Architecture</h2>

          <p>
            {{ project.architecture }}
          </p>
        </div>


        <div v-if="project.implementation">
          <h2>Implementation</h2>

          <p>
            {{ project.implementation }}
          </p>
        </div>


        <div v-if="project.challenges">
          <h2>Challenges</h2>

          <p>
            {{ project.challenges }}
          </p>
        </div>


        <div v-if="project.result">
          <h2>Result</h2>

          <p>
            {{ project.result }}
          </p>
        </div>


        <div v-if="project.lessons_learned">
          <h2>Lessons Learned</h2>

          <p>
            {{ project.lessons_learned }}
          </p>
        </div>


        <div v-if="project.technologies.length">
          <h2>Technologies</h2>

          <div class="technology-list">
            <span
              v-for="technology in project.technologies"
              :key="technology"
            >
              {{ technology }}
            </span>
          </div>
        </div>


        <div class="project-links">

          <a
            v-if="project.github_url"
            :href="project.github_url"
            target="_blank"
            rel="noopener noreferrer"
          >
            GitHub
          </a>

          <a
            v-if="project.live_url"
            :href="project.live_url"
            target="_blank"
            rel="noopener noreferrer"
          >
            Live Demo
          </a>

        </div>

      </div>
    </section>

  </main>
</template>