import "./bootstrap";
import router from "./router.js";
import { createApp } from "vue";
import App from "./App.vue";

import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
// Import desired Vuetify themes and styles
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles' // Vuetify core styles

const vuetify = createVuetify({
    components,
    directives,
});

createApp(App).use(router).use(vuetify).mount("#app");
