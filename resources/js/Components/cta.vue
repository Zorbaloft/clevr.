<template>
    <v-container fluid>
        <v-row align="center" class="cta-section text-center my-5" :style="{ backgroundColor: color }">
            <v-col cols="12" md="6" v-if="selectedCta">
                <h2 class="my-2">{{ selectedCta.title }}</h2>
                <p class="my-2">{{ selectedCta.description }}</p>
                <v-btn class="my-2" rounded="xl" size="x-large" color="primary">{{ selectedCta.buttonText }}</v-btn>
            </v-col>
            <v-col cols="12" md="6">
                <v-parallax :src="selectedCta.imageSrc" height="400">
                </v-parallax>
                <!-- <v-img  :alt="selectedCta.imageAlt"></v-img> -->
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    props: ['color', 'ctaId'],
    data() {
        return {
            cta: [
                {
                    id: 1,
                    title: 'Course Title',
                    imageSrc: 'images/cta/cta4.png',
                    buttonText: 'click me',
                    description: 'Course Description',
                },
                {
                    id: 2,
                    title: 'Course Title',
                    imageSrc: 'images/cta/cta5.png',
                    buttonText: 'click me',
                    description: 'Course Description',
                }
            ],
            selectedCta: null
        };
    },
    created() {
        this.selectedCta = this.cta.find(item => item.id === this.ctaId);
    }
}
</script>
