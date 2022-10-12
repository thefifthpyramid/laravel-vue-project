import './bootstrap';
import { createApp } from 'vue'
import ViewUIPlus from 'view-ui-plus'
import router from "./router.js";
import 'view-ui-plus/dist/styles/viewuiplus.css'


import exampleComponent from './layout/app.vue'

createApp(exampleComponent).use(router)
    .use(ViewUIPlus).mount("#app")

