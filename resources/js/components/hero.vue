<template>
    <!-- hero start -->
    <v-container fluid :style="{ backgroundImage: 'url(' + heroBG + ')' }" class="  overflow-hidden"
        style="max-height: 90dvh;">
        <v-row class="pa-3 align-center  ">
            <v-col cols="12" md="6" class="">
                <h2 class="text-h1">Master Your Skills Online</h2>
                <p class="">Online Courses Taught by Industry Titans!</p>
                <v-form>
                    <v-text-field placeholder="What are you trying to learn?" class="rounded-4"></v-text-field>
                    <v-btn type="submit" size="large" class="btn-primary rounded-4">Search</v-btn>
                </v-form>
            </v-col>
            <v-col cols="12" md="6" class=" ">
                <v-img :src="heroBG2" alt="img" class="img-fluid h-75"></v-img>
            </v-col>
        </v-row>
    </v-container>

    <!-- hero cards -->
 
    <!--  hero end -->
</template>

<script>

export default {
    data() {
        return {

            heroBG: 'images/banners/billboard-bg.png',
            heroBG2: 'images/banners/billboard-img.jpg',
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

