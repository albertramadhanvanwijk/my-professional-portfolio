import type {
  Profile,
  Experience,
  Education,
  Skill,
  Project,
  Certification,
  Achievement,
  SocialLink,
} from '~/types/portfolio'

export const usePortfolioApi = () => {
  const config = useRuntimeConfig()

  const api = $fetch.create({
    baseURL: config.public.apiBase,
  })

  const getProfile = () =>
    api<{ data: Profile }>('/profile')

  const getExperiences = () =>
    api<{ data: Experience[] }>('/experiences')

  const getEducation = () =>
    api<{ data: Education[] }>('/education')

  const getSkills = () =>
    api<{ data: Skill[] }>('/skills')

  const getProjects = () =>
    api<{ data: Project[] }>('/projects')

  const getProject = (slug: string) =>
    api<{ data: Project }>(`/projects/${slug}`)

  const getCertifications = () =>
    api<{ data: Certification[] }>('/certifications')

  const getAchievements = () =>
    api<{ data: Achievement[] }>('/achievements')

  const getSocialLinks = () =>
    api<{ data: SocialLink[] }>('/social-links')

  return {
    getProfile,
    getExperiences,
    getEducation,
    getSkills,
    getProjects,
    getProject,
    getCertifications,
    getAchievements,
    getSocialLinks,
  }
}