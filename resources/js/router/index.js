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
        component: () => import('../components/dashboardFolder/DashboardComponent.vue'),
        children: [
            {
                path: '',
                name: 'home',
                component: () => import('../components/dashboardFolder/centerContent/Home.vue')
            },
            {
                path: '/networth',
                name: 'networth',
                component: () => import('../components/dashboardFolder/centerContent/Networth.vue')
            },
            {
                path: '/profile',
                name: 'profile',
                component: () => import('../components/dashboardFolder/centerContent/Profile.vue')
            },
            {
                path: '/addTransaction',
                name: 'addTransaction',
                component: () => import('../components/dashboardFolder/centerContent/AddTransaction.vue')
            },
            {
                path: '/viewTransaction:index',
                name: 'viewTransaction',
                component: () => import('../components/dashboardFolder/centerContent/ViewTransaction.vue')
            }
        ]
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
    },
    {
        path: '/right',
        name: 'right',
        component: () => import('../components/dashboardFolder/Right.vue')
    },
    {
        path: '/loading',
        name: 'loading',
        component: () => import('../components/Loading.vue')
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;