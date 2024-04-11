<template>
    <v-container fluid>
        <v-row align="center" 
            class="cta-section text-center my-5" v-if="cta">
            <v-col cols="12" md="6">
                <h2 class="my-2">{{ cta.title }}</h2>
                <p class="my-2">{{ cta.description }}</p>
                <v-btn class="my-2" rounded="xl" size="x-large" color="primary">{{ cta.buttonText }}</v-btn>
            </v-col>
            <v-col cols="12" md="6">
                <v-img :src="cta.imageSrc" :alt="cta.imageAlt"></v-img>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            cta: null
        }
    },

    async created() {
        const response = await axios.get('/api/cta');

        this.cta = response.data;
    },

}
</script>