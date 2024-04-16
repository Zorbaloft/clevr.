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
                <v-row >
                    <template v-for="course in courses" :key="course.id" >
                        <v-col class="mt-2" cols="12">
                            <strong>Categories </strong>
                        </v-col>

                        <v-col v-for="j in 6" :key="`${course}${j}`" cols="6" md="2">
                            <v-sheet height="300"><course-card :course="course"></course-card></v-sheet>
                        </v-col>
                    </template>
                </v-row>


            </v-container>
            <v-sheet class="d-flex align-center justify-center flex-wrap text-center mx-auto px-4" elevation="4"
                height="250" max-width="800" width="100%" rounded>
                <div>
                    <h2 class="text-h4 font-weight-black text-orange">Congratulations!</h2>

                    <div class="text-h5 font-weight-medium mb-2">
                        You are officially a part of the Vuetify Community!
                    </div>

                    <p class="text-body-2 mb-4">
                        Please head over to your inbox/spam or others folder to find our verificaiton email.
                    </p>

                    <v-btn color="orange" variant="text">Go to Login</v-btn>
                </div>
            </v-sheet>






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
                imageSrc: '/images/cta/cta4.png',
                buttonText: 'click me',
                description: 'Course Description',
            },

        ],
    }),


}
</script>
