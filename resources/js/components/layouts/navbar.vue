<template>
    <v-app-bar app color="deep-purple accent-4" dense dark>
        <v-app-bar-nav-icon></v-app-bar-nav-icon>

        <v-toolbar-title>Bingo</v-toolbar-title>

        <v-btn
            text
            outlined
            class="ml-2"
            v-for="link in links"
            :key="link.text"
            router
            :to="link.route"
        >
            <v-icon class="white--text">{{ link.icon }}</v-icon>
            {{ link.text }}
        </v-btn>

        <v-spacer></v-spacer>
        <!-- dropdown menu -->

        <v-menu offset-y>
            <template v-slot:activator="{ on, attrs }">
                <v-btn color="primary" dark v-bind="attrs" v-on="on">
                    <v-icon left>expand_more</v-icon>
                    <span>Menu</span>
                </v-btn>
            </template>
            <v-list>
                <v-list-item
                    v-for="link in links"
                    :key="link.text"
                    router
                    to="link.route"
                >
                    <v-list-item-title>{{ link.text }}</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>

        <v-btn text>
            <span>Sign Out</span>
            <v-icon right>exit_to_app</v-icon>
        </v-btn>
    </v-app-bar>
</template>

<script>
import Popup from "./popups";
export default {
    components: {
        Popup
    },
    data() {
        return {
            drawer: null,
            links: [
                { icon: "home", text: "home", route: "/" },
                { icon: "api", text: "about", route: "/about" },
                { icon: "dashboard", text: "dashboard", route: "/dashboard" }
            ]
        };
    }
};
</script>

<style></style>
