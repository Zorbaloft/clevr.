<template>
    <div>
        <!-- Section 1 -->
        <v-section>
            <v-container fluid class="h-50 align-center d-flex pa-16" :style="{ backgroundColor: color }">
                <div class="text-center">
                    <h1 class="text-white">Howdy, we are Edulogy, we have brought together the best quality services,
                        offers,
                        projects for you!</h1>
                </div>
            </v-container>
        </v-section>

        <!-- Section 2 -->
        <v-section>
            <v-container fluid>
                <v-row class="gr-2">
                    <v-col cols="12" md="4">
                        <v-card class="mx-auto" prepend-icon="mdi-laptop" subtitle="The #1 Vue UI Library" width="400">
                            <template v-slot:title>
                                <span class="font-weight-black">Learning system</span>
                            </template>
                            <v-card-text class="bg-surface-light pt-4">
                                <span> All sections required for online training are included in Edulogy. </span>

                            </v-card-text>
                            <v-btn class="ma-5" href="#">Read more</v-btn>
                        </v-card>
                    </v-col>

                    <v-col cols="12" md="4">
                        <v-card class="mx-auto" prepend-icon="mdi-laptop" subtitle="The #1 Vue UI Library" width="400">
                            <template v-slot:title>
                                <span class="font-weight-black">Learning system</span>
                            </template>
                            <v-card-text class="bg-surface-light pt-4">
                                <span> All sections required for online training are included in Edulogy. </span>

                            </v-card-text>
                            <v-btn class="readmore" href="#">Read more</v-btn>
                        </v-card>
                    </v-col>

                    <v-col cols="12" md="4">
                        <v-card class="mx-auto" prepend-icon="mdi-laptop" subtitle="The #1 Vue UI Library" width="400">
                            <template v-slot:title>
                                <span class="font-weight-black">Learning system</span>
                            </template>
                            <v-card-text class="bg-surface-light pt-4">
                                <span> All sections required for online training are included in Edulogy. </span>

                            </v-card-text>
                            <v-btn class="readmore" href="#">Read more</v-btn>
                        </v-card>
                    </v-col>
                </v-row>

                <v-spacer></v-spacer>

                <v-row>
                    <v-col cols="12" md="6">
                        <v-card class="mx-auto" prepend-icon="mdi-laptop" subtitle="The #1 Vue UI Library" width="400">
                            <template v-slot:title>
                                <span class="font-weight-black">Learning system</span>
                            </template>
                            <v-card-text class="bg-surface-light pt-4">
                                <span> All sections required for online training are included in Edulogy. </span>

                            </v-card-text>
                            <v-btn class="readmore" href="#">Read more</v-btn>
                        </v-card>
                    </v-col>

                    <v-col cols="12" md="6">
                        <v-card class="mx-auto" prepend-icon="mdi-laptop" subtitle="The #1 Vue UI Library" width="400">
                            <template v-slot:title>
                                <span class="font-weight-black">Learning system</span>
                            </template>
                            <v-card-text class="bg-surface-light pt-4">
                                <span> All sections required for online training are included in Edulogy. </span>

                            </v-card-text>
                            <v-btn class="readmore" href="#">Read more</v-btn>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-section>
    </div>
</template>

<script>
export default {
    name: 'CardsSection',
    props: ['color'],
}
</script>