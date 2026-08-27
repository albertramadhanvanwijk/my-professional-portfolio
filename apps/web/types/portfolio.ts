export interface Profile {
  id: string
  name: string
  headline: string
  short_bio: string | null
  long_bio: string | null
  location: string | null
  email: string | null
  github_url: string | null
  linkedin_url: string | null
  website_url: string | null
  available_for_work: boolean
}

export interface Skill {
  id: string
  name: string
  slug: string
  category: string
  description: string | null
  proficiency_label: string | null
}

export interface ExperienceHighlight {
  title: string
  description: string | null
  metric: string | null
}

export interface Experience {
  id: string
  company: string
  company_description: string | null
  position: string
  employment_type: string | null
  location: string | null
  start_date: string
  end_date: string | null
  is_current: boolean
  description: string | null
  highlights: ExperienceHighlight[]
  skills: {
    id: string
    name: string
    category: string
    evidence: string | null
  }[]
}

export interface Education {
  id: string
  institution: string
  degree: string
  field_of_study: string | null
  start_date: string | null
  end_date: string | null
  grade: string | null
  grade_scale: string | null
  description: string | null
}

export interface Project {
  id: string
  title: string
  slug: string
  short_description: string | null
  description: string | null
  problem: string | null
  solution: string | null
  role: string | null
  architecture: string | null
  implementation: string | null
  challenges: string | null
  result: string | null
  lessons_learned: string | null
  github_url: string | null
  live_url: string | null
  cover_image: string | null
  featured: boolean
  status: string
  started_at: string | null
  completed_at: string | null
  published_at: string | null
  technologies: string[]
  skills: {
    id: string
    name: string
    category: string
    evidence: string | null
  }[]
}

export interface Certification {
  id: string
  name: string
  issuer: string
  issued_at: string | null
  credential_id: string | null
  credential_url: string | null
  description: string | null
}

export interface Achievement {
  id: string
  title: string
  issuer: string | null
  date: string | null
  description: string | null
  url: string | null
}

export interface SocialLink {
  platform: string
  label: string
  url: string
  icon: string | null
}