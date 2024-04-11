import "./bootstrap";

import { createApp } from "vue";
import TestComponent from "./Components/TestComponent.vue";

const app = createApp({});

app.component("test-component", TestComponent);

app.mount("#app");