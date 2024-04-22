<template>
    <v-system-bar app color="deep-orange-accent-2">
        <v-spacer></v-spacer>

        <v-icon>mdi-square</v-icon>

        <v-icon>mdi-circle</v-icon>

        <v-icon>mdi-triangle</v-icon>
    </v-system-bar>
    <v-app-bar app color="brown-darken-4" class="elevation-0">
        <v-btn icon>
            <v-icon @click.stop="drawer = !drawer">mdi-menu</v-icon>
        </v-btn>
        <v-toolbar-title> <img :src="logo" contain height="150"></v-toolbar-title>
        <v-spacer></v-spacer>
        <v-btn text>Logout</v-btn>
    </v-app-bar>

    <v-navigation-drawer app color="brown-darken-4" dark v-model="drawer" permenant>
        <v-list color="transparent">
            <v-list-item>
                <v-list-item icon>
                    <v-icon>mdi-view-dashboard</v-icon>
                </v-list-item>
                <v-list-item-title>Dashboard</v-list-item-title>
            </v-list-item>
            <v-list-item>
                <v-list-item icon>
                    <v-icon>mdi-account-box</v-icon>
                </v-list-item>
                <v-list-item-title>Account</v-list-item-title>
            </v-list-item>
            <v-list-item>
                <v-list-item icon>
                    <v-icon>mdi-gavel</v-icon>
                </v-list-item>
                <v-list-item-title>Admin</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>


</template>


<script>
export default {
    data() {
        return {
            logo: "/images/logos/clevr4.png",
            drawer: false,
        }
    }
}
</script>