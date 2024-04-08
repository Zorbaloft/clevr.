<template>

    <h1>HOME</h1>
    <router-link to="/test"> Take me to Test page </router-link>
    <button @click="fetchData">Trigger Endpoint</button>
    <p v-if="response">{{ response.data }}</p>
    

</template>

<script>
export default {
    data() {
        return {
            response: null,
        };
    },
    methods: {
        fetchData,
    },

};
import axios from "axios";
import { ref } from "vue";

const response = ref();

async function fetchData() {
    try {
        const response = await axios.get("/api/test-me");
        this.response = response.data; // Update the reactive variable only after successful fetch
    } catch (error) {
        console.error(error);
    }
}
</script>