<template>
  <AppLayout>
    <div class="home">
      <h1>Ciao, sono Oleksandra!</h1>
      <p>Sono uno sviluppatore web junior con esperienza in Laravel e Vue.</p>
      <Link href="/projects" class="btn">Vedi i miei progetti</Link>
      <Link href="/contact" class="btn">Contattami</Link>
    </div>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3'; // Importa il componente Link di Inertia
</script>

<style scoped>
.home {
  text-align: center;
  padding: 20px;
}

h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
}

.btn {
  display: inline-block;
  margin: 0.5rem;
  padding: 0.75rem 1.5rem;
  background-color: #4CAF50;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.btn:hover {
  background-color: #45a049;
}
</style>
