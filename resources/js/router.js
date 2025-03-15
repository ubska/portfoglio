import { createRouter, createWebHistory } from 'vue-router';
import Home from './pages/Home.vue';
 // Importa la tua pagina personalizzata

const routes = [
    { path: '/', component: Home } // La tua pagina principale
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
