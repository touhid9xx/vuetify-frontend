<template>
    <div class="dashboard">
        <v-app-bar app class="red lighten-5">
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
        </v-app-bar>

        <!-- <v-navigation-drawer app class="indigo" v-model="hide">
            <v-list dense class="mt-16">
                <v-subheader
                    size="36"
                    class="display-1 font-weight-bold lime--text align-center"
                    >Dashboard</v-subheader
                >

                <v-list-item-group v-model="item" color="primary" class="mt-5">
                    <v-list-item
                        v-for="(item, i) in items"
                        :key="i"
                        :to="item.route"
                        size="36"
                    >
                        <v-list-item-icon>
                            <v-icon
                                v-text="item.icon"
                                class="white--text"
                            ></v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title
                                class="white--text"
                                v-text="item.text"
                                size="36"
                            ></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer> -->
        <v-container class="my-5">
            <v-row no-gutters>
                <v-col cols="4" md="4">
                    <v-navigation-drawer v-model="drawer" class="text-center">
                        <v-list-item>
                            <v-list-item-content>
                                <v-list-item-title class="title">
                                    Dashboard
                                </v-list-item-title>
                                <v-list-item-subtitle>
                                    <v-layout column align-center>
                                        <v-flex class="mt-5">
                                            <v-avatar size="100">
                                                <img src="img/avatar-1.png" />
                                            </v-avatar>
                                        </v-flex>
                                        <v-flex>
                                            Touhidur
                                        </v-flex>
                                        <v-flex class="mt-4 mb-3">
                                            <Popup />
                                        </v-flex>
                                    </v-layout>
                                </v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>

                        <v-divider></v-divider>

                        <v-list dense nav>
                            <v-list-item
                                v-for="item in items"
                                :key="item.title"
                                router
                                :to="item.text"
                            >
                                <v-list-item-icon>
                                    <v-icon>{{ item.icon }}</v-icon>
                                </v-list-item-icon>

                                <v-list-item-content>
                                    <v-list-item-title>{{
                                        item.text
                                    }}</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list>
                    </v-navigation-drawer>
                </v-col>
                <v-col cols="8" sm="6" md="8">
                    <v-tooltip top>
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                small
                                text
                                color="grey"
                                @click="sortBy('title')"
                                v-bind="attrs"
                                v-on="on"
                            >
                                <v-icon left small>folder</v-icon>
                                <span class="caption text-lowercase"
                                    >by project name</span
                                >
                            </v-btn>
                        </template>
                        <span>Sort project by project name</span>
                    </v-tooltip>

                    <v-tooltip top>
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                small
                                text
                                color="grey"
                                @click="sortBy('person')"
                                v-bind="attrs"
                                v-on="on"
                            >
                                <v-icon left small>person</v-icon>
                                <span class="caption text-lowercase"
                                    >sort project by person</span
                                >
                            </v-btn>
                        </template>
                        <span>Sort project by person</span>
                    </v-tooltip>
                    <v-card
                        text
                        v-for="project in projects"
                        :key="project.title"
                    >
                        <v-layout
                            row
                            wrap
                            :class="`pa-3 project ${project.status}`"
                        >
                            <v-flex xs12 md6>
                                <div class="caption grey--text">
                                    Project title
                                </div>
                                <div>{{ project.title }}</div>
                            </v-flex>
                            <v-flex xs6 sm4 md2>
                                <div class="caption grey--text">Person</div>
                                <div>{{ project.person }}</div>
                            </v-flex>
                            <v-flex xs6 sm4 md2>
                                <div class="caption grey--text">Due by</div>
                                <div>{{ project.due }}</div>
                            </v-flex>
                            <v-flex xs6 sm4 md2>
                                <div class="right">
                                    <v-chip
                                        :class="
                                            `${project.status} white--text
                            caption my-2`
                                        "
                                    >
                                        {{ project.status }}</v-chip
                                    >
                                </div>
                            </v-flex>
                        </v-layout>
                        <v-divider></v-divider>
                    </v-card>
                    <router-view />
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
import Popup from "../layouts/popups";
export default {
    components: { Popup },
    data() {
        return {
            items: [
                { icon: "home", text: "Home", route: "/" },
                {
                    icon: "camera_enhance",
                    text: "Projects",
                    route: "/projects"
                },
                { icon: "supervised_user_circle", text: "Team", route: "/team" }
            ],
            projects: [
                {
                    title: "The avengers",
                    person: "Joss",
                    due: "01/09/2012",
                    status: "completed",
                    content: "The avengers take down loki and wait for thanos"
                },
                {
                    title: "Batman begins",
                    person: "Christopher",
                    due: "01/09/2008",
                    status: "completed",
                    content:
                        "The batman begins his journey in gotham after finish the league of shadows"
                },
                {
                    title: "The Batman",
                    person: "Gizza",
                    due: "01/09/2021",
                    status: "production",
                    content:
                        "Story of year two batman, how batman find his true nature"
                },
                {
                    title: "Kirsshh",
                    person: "Krzaat",
                    due: "01/09/2022",
                    status: "overdue",
                    content:
                        "Finally jadu will come back from space to meet rohit son, who developed special power from sunlight"
                }
            ],
            drawer: false,
            seen: false
        };
    },
    methods: {
        sortBy(prop) {
            this.projects.sort((a, b) => (a[prop] < b[prop] ? -1 : 1));
        }
    }
};
</script>

<style>
.project.completed {
    border-left: 4px solid slateblue;
}
.project.production {
    border-left: 4px solid steelblue;
}

.project.overdue {
    border-left: 4px solid greenyellow;
}
.v-chip.completed {
    background: slateblue;
}
.v-chip.production {
    background: steelblue;
}

.v-chip_content.overdue {
    background: greenyellow;
}
</style>
