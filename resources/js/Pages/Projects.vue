<template>
  <AppLayout>
    <section id="projects" class="projects-section">
      <div class="container">
        <h2 class="section-title">Progetti</h2>
        <div class="project-grid">
          <div v-for="project in projects" :key="project.id" class="project-card">
            <h3 class="project-title">{{ project.title }}</h3>
            <p class="project-description">{{ project.description }}</p>
            <a :href="project.link" target="_blank" class="btn btn-secondary">Vedi progetto</a>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
  projects: Array,
});
</script>

<style scoped>
.projects-section {
  min-height: 100vh; /* Occupa l'intera altezza della viewport */
  padding: 4rem 2rem;
  background-color: #112240;
}

.section-title {
  font-size: 2.5rem;
  color: #ccd6f6;
  text-align: center;
  margin-bottom: 2rem;
}

.project-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}

.project-card {
  background-color: #0a192f;
  border-radius: 8px;
  padding: 1.5rem;
  text-align: center;
  transition: transform 0.3s ease;
}

.project-card:hover {
  transform: translateY(-10px);
}

.project-title {
  font-size: 1.5rem;
  color: #ccd6f6;
  margin-bottom: 1rem;
}

.project-description {
  font-size: 1rem;
  color: #8892b0;
  margin-bottom: 1.5rem;
}

.btn-secondary {
  background-color: transparent;
  color: #64ffda;
  border: 2px solid #64ffda;
}

.btn-secondary:hover {
  background-color: #64ffda;
  color: #0a192f;
}

/* Stili responsive */
@media (max-width: 768px) {
  .project-grid {
    grid-template-columns: 1fr;
  }
}
</style>
