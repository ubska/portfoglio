// resources/js/router.js
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    component: () => import('./Pages/Welcome.vue'),
  },
  {
    path: '/projects',
    component: () => import('./Pages/Projects.vue'),
  },
  {
    path: '/contact',
    component: () => import('./Pages/Contact.vue'),
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
