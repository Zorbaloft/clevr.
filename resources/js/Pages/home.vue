<template>
    <v-app>
        <navbar></navbar>
        <hero :heroBG2="heroBG2"> </hero>
        <v-main>

            <v-container fluid class="features">
                <v-row class="d-flex justify-center  ">
                    <v-col class="" cols="12" md="4 " sm="6">
                        <v-card class="custom-card mx-5" hover>
                            <v-card-title>'Introduction to Vue.js',</v-card-title>
                            <v-card-text>'Learn the basics of Vue.js and build interactive web
                                applications.'</v-card-text>
                            <div class="custom-card-overlay"></div>
                        </v-card>
                    </v-col>
                    <v-col class="" cols="12" md="4 " sm="6">
                        <v-card class="custom-card mx-5" hover>
                            <v-card-title>'Introduction to Vue.js',</v-card-title>
                            <v-card-text>'Learn the basics of Vue.js and build interactive web
                                applications.'</v-card-text>
                            <div class="custom-card-overlay"></div>
                        </v-card>
                    </v-col>
                    <v-col class="" cols="12" md="4 " sm="6">
                        <v-card class="custom-card mx-5" hover>
                            <v-card-title>'Introduction to Vue.js',</v-card-title>
                            <v-card-text>'Learn the basics of Vue.js and build interactive web
                                applications.'</v-card-text>
                            <div class="custom-card-overlay"></div>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>

            <v-container>
                <v-row>
                    <template v-for="course in courses" :key="course.id">
                        <v-col class="mt-2" cols="12">
                            <strong>Categories </strong>
                        </v-col>

                        <v-col v-for="j in 4" :key="`${course}${j}`" cols="5" md="3">
                            <v-sheet width="250" eight="500"><course-card :course="course"></course-card></v-sheet>
                        </v-col>

                    </template>
                </v-row>


            </v-container>


            <cta-section v-for="ctaItem in cta" :key="ctaItem.id" :cta="ctaItem" color="#A1887F"></cta-section>


            <v-container>
                <v-row class="d-flex justify-space-between align-center">
                    <v-col cols="12" md="6">
                        <p class="text--secondary">Pick your niche and get started</p>
                        <h2 class="display-6 font-weight-bold">Popular Categories</h2>
                    </v-col>
                    <v-col cols="12" md="6" class="text-end">
                        <v-btn color="primary" class="mt-4">View all categories</v-btn>
                    </v-col>
                </v-row>
                <v-row class="mt-2">
                    <v-col cols="12" md="4" v-for="categorie in categories" :key="categorie.id">
                        <a href="" class="text-decoration-none">
                            <v-hover>
                                <template v-slot:default="{ isHovering, props }">
                                    <v-card v-bind="props" :color="isHovering ? categorie.hover : categorie.color">
                                        <v-card-text class="d-flex align-center">
                                            <v-icon class="me-4 text-h3"
                                                :color="categorie.hover ? 'grey darken-3' : 'white'">{{
            categorie.icon }}</v-icon>
                                            <div>
                                                <p class="fw-bold text-uppercase mb-1"
                                                    :class="{ 'text--light': categorie.hover }">{{
                                                    categorie.name }}</p>
                                                <p class="m-0">{{ categorie.qty }}</p>
                                            </div>
                                        </v-card-text></v-card>
                                </template>
                            </v-hover>
                        </a>
                    </v-col>
                </v-row>
            </v-container>

        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
        heroBG2: 'images/banners/billboard-img.jpg',
        courses: [
            {
                id: 1,
                title: 'Course Title',
                image: 'images/courses/item1.jpg',
                author: 'Author Name',
                rating: 4,
                description: 'Course Description',
            },
            // Add more course objects here
        ], cta: [
            {
                id: 1,
                title: 'Course Title',
                imageSrc: 'images/cta/cta4.png',
                buttonText: 'click me',
                description: 'Course Description',
            },
        ],
        categories: [

            {
                id: 1,
                name: 'Category 1',
                qty: 3,
                icon: 'mdi-pencil-box',
                color: 'deep-orange-lighten-2',
                hover: 'deep-orange-darken-1',

            }

        ],
    }),


}
</script>
