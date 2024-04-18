// necessary imports
import "./bootstrap";
import '@mdi/font/css/materialdesignicons.css'
import {
    createApp
} from "vue";

const cssModules = import.meta.glob('../css/*.css')

for (const path in cssModules) {
  cssModules[path]().then((mod) => {
    console.log(path, mod)
  })
}


// Vuetify
import 'vuetify/styles'
import {
    createVuetify
} from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives,
    defaultIcons: 'mdi',

})

// components
import Navbar from "./Components/navbar.vue";
import Layout from "./Components/layout.vue";
import Hero from "./Components/hero.vue";
import Home from './Pages/home.vue';
import CourseCard from "./Components/course-card.vue";
import CtaSection from "./Components/cta.vue";
import CategoriesSection from "./Components/categories.vue";
import CardsSection from "./Components/cards-section.vue";

// create the app
const app = createApp({});

app.component('home', Home);
app.component("navbar", Navbar);
app.component("layout", Layout);
app.component("hero", Hero);
app.component("course-card", CourseCard);
app.component("cta-section", CtaSection);
app.component("categories-section", CategoriesSection);
app.component("cards-section", CardsSection);
app.use(vuetify);
app.mount("#app");

