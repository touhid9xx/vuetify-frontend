<template>
    <!-- make it grey body and lighten up to 4 -->
    <v-app>
        <Navbar />
        <v-main>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
import Navbar from "./layouts/navbar";
export default {
    components: {
        Navbar
    },

    data() {
        return {
            drawer: null
        };
    }
};
</script>

<style></style>
