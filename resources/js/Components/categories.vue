<template> <v-container>
        <v-row class="mt-2">
            <v-col cols="12" md="4" v-for="category in categories" :key="category.id">
                <a href="" class="text-decoration-none">
                    <v-hover>
                        <template v-slot:default="{ isHovering, props }">
                            <v-card v-bind="props" :color="isHovering ? category.hover : category.color">
                                <v-card-text class="d-flex align-center">
                                    <v-icon class="me-4 text-h3" :color="category.hover ? 'grey darken-3' : 'white'">{{
                category.icon }}</v-icon>
                                    <div>
                                        <p class="fw-bold text-uppercase mb-1"
                                            :class="{ 'text--light': category.hover }">{{
                category.name }}</p>
                                        <p class="m-0">{{ category.qty }}</p>
                                    </div>
                                </v-card-text></v-card>
                        </template>
                    </v-hover>
                </a>
            </v-col>
        </v-row>
    </v-container>
</template>
<script>

export default {
    data: () => ({

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
                name: 'Category 1',
                qty: 3,
                icon: 'mdi-pencil-box',
                color: 'deep-orange-lighten-2',
                hover: 'deep-orange-darken-1',

            }

        ],
    })

}


</script>