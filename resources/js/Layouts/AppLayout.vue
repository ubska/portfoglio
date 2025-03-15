<template>
  <div class="app-layout">
    <header class="header">
      <nav class="nav">
        <Link href="/" class="nav-link">Home</Link>
        <Link href="/projects" class="nav-link">Projects</Link>
        <Link href="/contact" class="nav-link">Contact</Link>
      </nav>
    </header>
    <main class="main">
      <slot /> <!-- Qui verrà renderizzato il contenuto della pagina -->
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.app-layout {
  display: flex;
  flex-direction: column;
  min-height: 100vh; /* Occupa almeno l'intera altezza della viewport */
}

.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #0a192f;
  padding: 1rem 2rem;
  z-index: 1000;
  display: flex;
  align-items: center; /* Centra verticalmente il contenuto dell'header */
  height: 80px; /* Altezza fissa per l'header */
}

.nav {
  display: flex;
  justify-content: flex-end;
  gap: 2rem;
  align-items: center; /* Centra verticalmente i link */
}

.nav-link {
  color: #ccd6f6;
  text-decoration: none;
  font-size: 1rem;
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-link:hover {
  color: #64ffda;
}

.main {
  flex: 1; /* Occupa lo spazio rimanente */
  padding-top: 80px; /* Spazio per la barra di navigazione fissa */
  background-color: #0a192f;
  color: #ccd6f6;
  overflow-x: hidden; /* Evita lo scroll orizzontale */
}

/* Stili responsive */
@media (max-width: 768px) {
  .nav {
    justify-content: center;
    gap: 1rem;
  }

  .nav-link {
    font-size: 0.9rem;
  }
}
</style>
