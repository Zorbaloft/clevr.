<template>
    <v-footer color="brown-darken-4" class="white--text">
        <v-container fluid>
            <v-row>
                <v-col cols="4">
                    <h3 class="widget-title">Subscribe Our Newsletter</h3>
                    <v-form>
                        <v-text-field label="Enter email here.." solo></v-text-field>
                        <v-btn color="primary">Subscribe</v-btn>
                    </v-form>
                </v-col>

                <v-col cols="3">
                    <h3 class="widget-title">Join us today</h3>
                    <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                    <v-btn color="primary mt-5">Become a Teacher</v-btn>
                </v-col>

                <v-col cols="3">
                    <h3 class="widget-title">Popular Tags</h3>
                    <v-chip-group column>
                        <v-chip>course</v-chip>
                        <v-chip>web design</v-chip>
                        <v-chip>development</v-chip>
                        <!-- Add more chips here -->
                    </v-chip-group>
                </v-col>

                <v-col cols="2" >
                    <h3 class="widget-title">Support</h3>
                    <v-list lines="two" bg-color="brown-darken-4">
                        <v-list-item v-for="n in 3" :key="n" :title="'Item ' + n" 
                            subtitle="Lorem ipsum dolor sit amet consectetur adipisicing elit"></v-list-item>
                    </v-list>
                </v-col>
            </v-row>
        </v-container>
    </v-footer>
</template>

<script>
export default {
    // ...
}
</script>

<style scoped>
/* Add your styles here */
</style>