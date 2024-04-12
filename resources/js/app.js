import "./bootstrap";

import { createApp } from "vue";
import ExampleComponent from "./Components/example-component.vue";

const app = createApp({});



app.component("example-component", ExampleComponent);

app.mount("#app");