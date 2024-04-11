import "./bootstrap";
<<<<<<< HEAD

import { createApp } from "vue";
import TestComponent from "./Components/TestComponent.vue";

const app = createApp({});

app.component("test-component", TestComponent);

app.mount("#app");
=======
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
>>>>>>> 8315e5486cbf3f9da77507696f09c210ef9218ff
