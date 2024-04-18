<template>
    <v-container fluid class="video-container mt-16 pa-0 position-relative">
        <v-row class="home-message d-flex justify-center align-center text-center text-white font-weight-bold">
            <v-col cols="12" md="8">
                <div class="text-center text-xs-subtitle-1">
                    <h5 class="text-md-h4">Queres aprender mais para alem daquilo que te ensinam na universidade e na
                        escola?</h5>
                    <p class="text-xs-subtitle-1">Junta-te a nós e vem fazer parte da primeira escola online
                        exclusivamente em português.
                        Aprende com formadores com anos de experiencia no mercado de trabalho português.</p>

                    <div class="mt-5">
                        <v-btn class="mx-3" @click="readMore">Read More</v-btn>
                        <v-btn class="mx-3" @click="buyNow">Buy Now</v-btn>
                    </div>
                </div>
            </v-col>
            <v-col cols="12" md="8">
                <span>Explore <v-icon>mdi-chevron-down</v-icon></span>
            </v-col>
        </v-row>
        <div class="video-overlay"></div>
        <video autoplay muted loop id="myVideo">
            <source :src="heroBG2" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

    </v-container>
</template>

<script>
export default {
    name: 'Hero',
    data: () => ({ heroBG2: '/videos/preview.mp4', }),
    methods: {
        readMore() {
            console.log('Read More');
        },
        buyNow() {
            console.log('Buy Now');
        }
    }


}
</script>

<style scoped>
.home-message {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 100;

}

#myVideo {
    width: 100%;
    height: 100dvh;
    object-fit: cover;

}

.video-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    height: 100dvh;
}



/* The rest of your CSS goes here */
</style>