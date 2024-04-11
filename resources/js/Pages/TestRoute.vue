<template>
    <hero-component />
    <v-container fluid class="features">
        <v-row class="d-flex justify-center  ">
            <v-col class="" v-for="trendingCourse in trendingCourses" :key="trendingCourse.id" cols="12" md="4 " sm="6">
                <v-card class="custom-card mx-5" hover>
                    <v-card-title>{{ trendingCourse.title }}</v-card-title>
                    <v-card-text>{{ trendingCourse.description }}</v-card-text>
                    <div class="custom-card-overlay"></div>
                </v-card>
            </v-col>
        </v-row>
    </v-container>


    <!-- Featured Courses -->
    <v-container>
        <h2 class="text-center my-6">Featured Courses</h2>
        <v-row>
            <!-- Featured Course Cards -->
            <v-col v-for="course in featuredCourses" :key="course.id" cols="12" sm="6" md="4" lg="3">
                <v-card class="my-4" elevation="3">
                    <!-- Course Image -->
                    <v-img :src="course.image" height="200"></v-img>
                    <v-card-title class="text-h6">{{ course.title }}</v-card-title>
                    <v-row>
                        <v-col cols="6">
                            <v-card-subtitle>{{ course.author }}</v-card-subtitle>
                        </v-col>
                        <v-col cols="6" class="d-flex ">
                            <v-icon color="primary">mdi-clock-time-four-outline</v-icon>
                            <p class=" m-0">1h 50m</p>
                        </v-col>
                    </v-row>
                    <!-- Course Rating (optional) -->
                    <v-rating v-model="course.rating" readonly></v-rating>
                    <v-card-text>{{ course.description }}</v-card-text>
                    <!-- Enroll button (optional) -->
                    <v-btn color="primary" block>Enroll Now</v-btn>
                </v-card>
            </v-col>
        </v-row>
    </v-container>



    <v-container id="about" class="py-5 mt-5">
        <v-row align="center" class="mt-5">
            <v-col cols="12" md="5" offset-md="1">
                <v-img :src="aboutBG" aspect-ratio="1" class="rounded-circle"></v-img>
            </v-col>
            <v-col cols="12" md="5" class="mt-5 mt-md-0">
                <div class="mb-3">
                    <p class="text--secondary">Learn more about us</p>
                    <h2 class="display-6 font-weight-bold">About Us</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore vitae?
                    Numquam minima cum asperiores deleniti possimus provident, officia itaque esse eius, delectus
                    incidunt laudantium adipisci laboriosam!</p>
                <div class="d-flex">
                    <v-icon class="text--secondary">mdi-check-circle</v-icon>
                    <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative individuals.</p>
                </div>
                <div class="d-flex">
                    <v-icon class="text--secondary">mdi-check-circle</v-icon>
                    <p class="ps-4">Learn a skill of your choice from the experts around the world from various
                        industries</p>
                </div>
                <div class="d-flex">
                    <v-icon class="text--secondary">mdi-check-circle</v-icon>
                    <p class="ps-4">Learn a skill of your choice from the experts around the world from various
                        industries</p>
                </div>
                <v-btn color="primary" class="mt-4">Learn more</v-btn>
            </v-col>
        </v-row>
    </v-container>





    <!-- Popular Categories -->

    <v-container fluid :style="{ 'background-color': containerBackgroundColor }">
        <CtaSection title="Junte-se a algo maior"
            description="Junte-se a uma comunidade de aprendizado nacional e comece a aprender novas habilidades"
            buttonText="Junte-se hoje!" imageSrc="cta" imageAlt="Group of students learning together" />
    </v-container>


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
                                    <v-icon class="me-4 text-h3" :color="categorie.hover ? 'grey darken-3' : 'white'">{{
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



    <v-container fluid>
        <CtaSection title="Torne-se um instrutor!"
            description="Descubra como compartilhar conhecimento e ganhar dinheiro com isso!" buttonText="Ver mais!"
            imageSrc="cta2" imageAlt="Group of students learning together" />

    </v-container>


    |


</template>

<script>
import HeroComponent from '../components/hero.vue';
import CtaSection from '../components/cta.vue';
export default {
    components: {
        HeroComponent,
        CtaSection
    },
    data() {
        return {
            containerBackgroundColor: 'brown darken-4',
         
            heroBG: 'images/banners/billboard-bg.png',
            heroBG2: 'images/banners/billboard-img.jpg',
            aboutBG: 'images/banners/about-img.jpg',


            featuredCourses: [

                {
                    id: 1,
                    title: 'Introduction to Vue.js',
                    author: 'John Doe',
                    image: 'images/courses/item1.jpg',
                    rating: 3,
                    description: 'Learn the basics of Vue.js and build interactive web applications.',
                },

            ],
            banners: [

                {
                    id: 1,
                    src: 'images/banners/bannerNilfisk.jpg',
                },
                {
                    id: 2,
                    src: 'images/banners/bannerRafa5.jpg',
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

                }, {
                    id: 2,
                    name: 'Category 2',
                    qty: 5,
                    icon: 'mdi-video-box',
                    color: 'primary',
                    hover: 'indigo accent-4',
                },

            ],
            trendingCourses: [

                {
                    id: 1,
                    title: 'What is a Frontend Development?',
                    description: ' consectetur adipisicing elit. Ullam porro similique aliquid debitis ipsam soluta dolorum ipsa! Voluptate, suscipit iure.',
                },
                {
                    id: 2,
                    title: 'What is a Backend Development?',
                    description: 'consectetur adipisicing elit. Ullam porro similique aliquid debitis ipsam soluta dolorum ipsa! Voluptate, suscipit iure.',
                },
                {
                    id: 3,
                    title: 'What is a Backend Development?',
                    description: 'r adipisicing elit. Ullam porro similique aliquid debitis ipsam soluta dolorum ipsa! Voluptate, suscipit iure.',
                },

            ],
        };
    },

};
</script>

<style scoped></style>