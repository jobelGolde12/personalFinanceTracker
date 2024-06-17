import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: () => import('../components/welcome/WelcomeComponent.vue')
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('../components/welcome/LoginComponent.vue')
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;