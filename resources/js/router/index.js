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
    },
    {
        path: '/signup',
        name: 'signup',
        component: () => import('../components/welcome/SignupComponent.vue')
    },
    {
        path: '/dashboard',
        name: 'dashboard',
        component: () => import('../components/dashboardFolder/DashboardComponent.vue')
    },
    {
        path: '/left',
        name: 'left',
        component: () => import('../components/dashboardFolder/Left.vue')
    },
    {
        path: '/center',
        name: 'center',
        component: () => import('../components/dashboardFolder/Center.vue')
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;