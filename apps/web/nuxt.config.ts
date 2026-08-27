export default defineNuxtConfig({
  compatibilityDate: '2026-01-01',

  devtools: {
    enabled: true,
  },

  runtimeConfig: {
    public: {
      apiBase: process.env.NUXT_PUBLIC_API_BASE || 'http://localhost:8000/api',
    },
  },

  typescript: {
    strict: true,
    typeCheck: false,
  },

  css: [
    '~/assets/css/main.css',
  ],

  app: {
    head: {
      htmlAttrs: {
        lang: 'en',
      },
    },
  },
})