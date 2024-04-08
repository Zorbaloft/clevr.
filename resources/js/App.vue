<template>
    <v-app>
        <Navbar />
        <v-main>
            <router-view v-slot="{ Component, route }">
                <div :key="route.name">
                    <Component :is="Component" />
                </div>
            </router-view>
        </v-main>
        <Footer />
    </v-app>
</template>

<script>
import Navbar from './components/navbar.vue';
import Footer from './components/footer.vue'; 
import '/resources/css/custom-card.css';
import '/resources/css/app.css';

export default {
    components: {
        Navbar,
        Footer,
    },
};
</script>


<style scoped>
@import '/resources/css/custom-card.css';
@import '/resources/css/app.css';
</style>