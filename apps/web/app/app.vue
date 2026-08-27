<script setup lang="ts">
const config = useRuntimeConfig()

console.log('API:', config.public.apiBaseUrl)
</script>

<template>
  <div>
    <h1>Albert Portfolio</h1>
  </div>
</template>