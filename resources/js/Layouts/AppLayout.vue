<template>
  <div>
    <header>
      <nav>
        <Link href="/">Home</Link>
        <Link href="/projects">Progetti</Link>
        <Link href="/contact">Contatti</Link>
      </nav>
    </header>
    <main>
      <slot /> <!-- Qui verrà renderizzato il contenuto della pagina -->
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'; // Importa il componente Link di Inertia
</script>

<style scoped>
header {
  background-color: #333;
  padding: 1rem;
}

nav {
  display: flex;
  gap: 1rem;
}

nav a {
  color: white;
  text-decoration: none;
}

nav a:hover {
  text-decoration: underline;
}

main {
  padding: 2rem;
}
</style>
