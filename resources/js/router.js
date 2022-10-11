import {createWebHistory,createRouter} from "vue-router";
import home from './components/home.vue';
import about from './components/about.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: home
    },
    {
        path: '/about',
        name: 'About',
        component: about
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
