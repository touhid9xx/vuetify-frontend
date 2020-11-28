<template>
    <div>
        <h2 class="subheading grey--text">Manage team</h2>
        <v-container class="my-5">
            <v-layout row wrap>
                <v-flex
                    xs12
                    sm6
                    md4
                    lg3
                    v-for="person in team"
                    :key="person.name"
                >
                    <v-card text class="text-center ma-3">
                        <v-responsive class="pt-4">
                            <v-avatar size="100" class="grey lighten-2">
                                <img :src="person.avatar" />
                            </v-avatar>
                        </v-responsive>
                        <v-card-text>
                            <div class="subheading">{{ person.name }}</div>
                            <div class="grey--text">{{ person.role }}</div>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn text color="grey">
                                <v-icon small left>message</v-icon>
                                <span>Message</span>
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
            team: [
                {
                    name: "John",
                    role: "web developer",
                    avatar: "../img/avatar-1.png"
                },
                {
                    name: "Joe",
                    role: "python developer",
                    avatar: "../img/avatar2.png"
                },
                {
                    name: "Smith",
                    role: "laravel developer",
                    avatar: "../img/avatar3.png"
                },
                {
                    name: "Andi",
                    role: "Asp.net developer",
                    avatar: "../img/avatar4.png"
                },
                {
                    name: "Subranaem",
                    role: "Matlab developer",
                    avatar: "../img/avatar5.jpg"
                }
            ]
        };
    }
};
</script>

<style></style>
