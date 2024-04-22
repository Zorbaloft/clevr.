<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="app" >
        <v-app>
            <navbar></navbar>
            <hero></hero>
            <!-- features -->
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

            <!-- Restante do conteúdo -->
            <v-container>
                <v-row>
                    <v-col class="mt-2" cols="12">
                        <strong>Categories </strong>
                    </v-col>

                    <v-col cols="5" md="3">
                        <v-sheet width="250" eight="500"><course-card></course-card></v-sheet>
                    </v-col>
                </v-row>
            </v-container>

            <cta-section :cta-id="1" color="#A1887F"></cta-section>

            <v-row class="d-flex justify-space-between align-center pa-10">
                <v-col cols="12" md="6">
                    <p class="text--secondary">Pick your niche and get started</p>
                    <h2 class="display-6 font-weight-bold">Popular Categories</h2>
                </v-col>
                <v-col cols="12" md="6" class="text-end">
                    <v-btn color="primary" class="mt-4">View all categories</v-btn>
                </v-col>
            </v-row>

            <categories-section></categories-section>

            <v-container id="about" class="py-5 mt-5">
                <v-row align="center" class="mt-5">
                    <v-col cols="12" md="5" offset-md="1">
                        <v-img src="/images/banners/about-img.jpg" aspect-ratio="1" class="rounded-circle"></v-img>
                    </v-col>
                    <v-col cols="12" md="5" class="mt-5 mt-md-0">
                        <div class="mb-3">
                            <p class="text--secondary">Learn more about us</p>
                            <h2 class="display-6 font-weight-bold">About Us</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae nam commodi dolore
                            vitae?
                            Numquam minima cum asperiores deleniti possimus provident, officia itaque esse eius,
                            delectus
                            incidunt laudantium adipisci laboriosam!</p>
                        <div class="d-flex">
                            <v-icon class="text--secondary">mdi-check-circle</v-icon>
                            <p class="ps-4">Engage with a worldwide community of inquisitive and imaginative
                                individuals.</p>
                        </div>
                        <div class="d-flex">
                            <v-icon class="text--secondary">mdi-check-circle</v-icon>
                            <p class="ps-4">Learn a skill of your choice from the experts around the world from
                                various
                                industries</p>
                        </div>
                        <div class="d-flex">
                            <v-icon class="text--secondary">mdi-check-circle</v-icon>
                            <p class="ps-4">Learn a skill of your choice from the experts around the world from
                                various
                                industries</p>
                        </div>
                        <v-btn color="primary" class="mt-4">Learn more</v-btn>
                    </v-col>
                </v-row>
            </v-container>
            <section>
                <v-container fluid class=" justify-center  align-center d-flex pa-16"
                    :style="{ backgroundColor: '#3E2723' }">
                    <div class="text-center">
                        <h1 class="text-white ma-10">Howdy, we are Edulogy, we have brought together the best quality
                            services,
                            offers,
                            projects for you!</h1>
                    </div>
                </v-container>
            </section>
            <cards-section></cards-section>

            <footer-section></footer-section>
        </v-app>
    </div>


    <script></script>
</body>

</html>
