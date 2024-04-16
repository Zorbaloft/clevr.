<template>
    <v-parallax src="images/banners/billboard-bg.png"  height="700">
        <v-row class="pa-15 align-center  ">
            <v-col cols="12" md="6" class="mt-10">
                <h2 class="text-h1">Master Your Skills Online</h2>
                <p class="">Online Courses Taught by Industry Titans!</p>
                <v-form>
                    <v-text-field placeholder="What are you trying to learn?" class="rounded-4"></v-text-field>
                    <v-btn type="submit" size="large" class="btn-primary rounded-4">Search</v-btn>
                </v-form>
            </v-col>
            <v-col cols="12" md="6" class=" ">
                <v-img :src="heroBG2" alt="img"  height="700"></v-img>
            </v-col>
        </v-row>
    </v-parallax>
</template>

<script>
export default {
    name: 'Hero',
    props: ['heroBG2'],
}
</script>

<style scoped>
/* Your hero styles go here */
</style>