// necessary imports
import "./bootstrap";
import '@mdi/font/css/materialdesignicons.css'
import { createApp } from "vue";
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import Navbar from "./Components/navbar.vue";
import Layout from "./Components/layout.vue";
import Hero from "./Components/hero.vue";
import CourseCard from "./Components/course-card.vue";
import CtaSection from "./Components/cta.vue";
import CategoriesSection from "./Components/categories.vue";
import CardsSection from "./Components/cards-section.vue";
import Footer from "./Components/footer.vue";

async function loadCssModules() {
  const cssModules = import.meta.glob('../css/*.css')

  const promises = [];
  for (const path in cssModules) {
    const promise = cssModules[path]().then((mod) => {
      console.log(path, mod)
    });
    promises.push(promise);
  }

  await Promise.all(promises);
}

loadCssModules().then(() => {
  const vuetify = createVuetify({
    components,
    directives,
    defaultIcons: 'mdi',
  });

  // create the app
  const app = createApp({});

  app.component("navbar", Navbar);
  app.component("layout", Layout);
  app.component("hero", Hero);
  app.component("course-card", CourseCard);
  app.component("cta-section", CtaSection);
  app.component("categories-section", CategoriesSection);
  app.component("cards-section", CardsSection);
  app.component("footer-section", Footer);
  app.use(vuetify);
  app.mount("#app");
});