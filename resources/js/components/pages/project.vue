<template>
    <div class="projects">
        <h2>Projects</h2>
        <v-container>
            <v-row justify="center">
                <v-expansion-panels
                    accordion
                    v-for="project in myProjects"
                    :key="project.title"
                >
                    <v-expansion-panel>
                        <v-expansion-panel-header>{{
                            project.title
                        }}</v-expansion-panel-header>
                        <v-expansion-panel-content>
                            <v-card>
                                <v-card-text class="px-4 grey--text">
                                    <div class="font-wieght-bold">
                                        {{ project.due }}
                                    </div>
                                    <div>{{ project.content }}</div>
                                </v-card-text>
                            </v-card>
                        </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </v-row>
        </v-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
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
                    person: "Joss",
                    due: "01/09/2021",
                    status: "production",
                    content:
                        "Story of year two batman, how batman find his true nature"
                },
                {
                    title: "Kirsshh",
                    person: "Joss",
                    due: "01/09/2022",
                    status: "overdue",
                    content:
                        "Finally jadu will come back from space to meet rohit son, who developed special power from sunlight"
                }
            ]
        };
    },
    computed: {
        myProjects() {
            return this.projects.filter(project => {
                return project.person === "Joss";
            });
        }
    }
};
</script>

<style></style>
