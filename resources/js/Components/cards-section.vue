<template>
    <div>
        <!-- Section 2 -->
        <section>
            <v-row class="custom-positon gr-1 mt-10">
                <v-col cols="12" md="4" v-for="card in cards.slice(0, 3)" :key="card.id">
                    <v-card class="mx-auto" :prepend-icon="card.icon" :subtitle="card.subtitle" width="400">
                        <template v-slot:title>
                            <span class="font-weight-black">{{ card.title }}</span>
                        </template>
                        <v-card-text class="bg-surface-light pt-4">
                            <span>{{ card.text }}</span>
                        </v-card-text>
                        <v-btn class="ma-5" :href="card.link">Read more</v-btn>
                    </v-card>
                </v-col>
            </v-row>
            <v-spacer></v-spacer>
        </section>
    </div>
</template>

<script>
export default {
    name: 'CardsSection',
    props: ['color'],
    data() {
        return {
            cards: [
                {
                    id: 1,
                    title: 'Learning system',
                    text: 'All sections required for online training are included in Edulogy.',
                    link: '#',
                    subtitle: 'The #1 Vue UI Library',
                    icon: 'mdi-account',
                },
                {
                    id: 2,
                    title: 'Learning system',
                    text: 'All sections required for online training are included in Edulogy.',
                    link: '#',
                    subtitle: 'The #1 Vue UI Library',
                    icon: 'mdi-account',
                },  {
                    id: 3,
                    title: 'Learning system',
                    text: 'All sections required for online training are included in Edulogy.',
                    link: '#',
                    subtitle: 'The #1 Vue UI Library',
                    icon: 'mdi-account',
                },
                // Add more cards as needed
            ],
        };
    },
}
</script>
<style scoped>
.custom-positon {
    position: relative;
    bottom: 90px;
}
</style>