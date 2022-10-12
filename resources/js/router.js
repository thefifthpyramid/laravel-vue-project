import {createWebHistory,createRouter} from "vue-router";
import home from './pages/home.vue';
import about from './pages/about.vue';
import form from './pages/form.vue';
import tags from './pages/tags.vue';

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
    },{
        path: '/form',
        name: 'Form',
        component: form
    },{
        path: '/tags',
        name: 'Tags',
        component: tags
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
