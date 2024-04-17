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
    <div id="app">
        <!-- Conteúdo do componente Vue.js -->
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

            <v-row class="d-flex justify-space-between align-center">
                <v-col cols="12" md="6">
                    <p class="text--secondary">Pick your niche and get started</p>
                    <h2 class="display-6 font-weight-bold">Popular Categories</h2>
                </v-col>
                <v-col cols="12" md="6" class="text-end">
                    <v-btn color="primary" class="mt-4">View all categories</v-btn>
                </v-col>
            </v-row>

            <categories-section></categories-section>

            <cta-section :cta-id="2"></cta-section>


        </v-app>
    </div>


    <script></script>
</body>

</html>
