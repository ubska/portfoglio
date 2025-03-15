<template>
  <AppLayout>
    <h1>I miei progetti</h1>
    <ul>
      <li v-for="project in projects" :key="project.id">
        {{ project.title }}
      </li>
    </ul>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
  projects: Array,
});
</script>

<style scoped>
h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 0.5rem;
}
</style>
