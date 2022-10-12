import './bootstrap';
import { createApp } from 'vue'
import router from "./router.js";

import exampleComponent from './layout/app.vue'

createApp(exampleComponent).use(router).mount("#app")

