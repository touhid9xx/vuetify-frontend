<template>
    <div class="text-center">
        <v-dialog v-model="dialog" width="500">
            <template v-slot:activator="{ on, attrs }">
                <v-btn color="red lighten-2" dark v-bind="attrs" v-on="on">
                    Add new project
                </v-btn>
            </template>

            <v-card>
                <v-card-title class="headline green lighten-2">
                    Add a new project
                </v-card-title>

                <v-card-text>
                    <v-form class="px-3" ref="form">
                        <v-text-field
                            prepend-icon="title"
                            label="Title"
                            v-model="title"
                            :rules="inputRules"
                        ></v-text-field>
                        <v-textarea
                            prepend-icon="create"
                            label="Information"
                            v-model="content"
                            :rules="inputRules"
                        ></v-textarea>

                        <v-menu>
                            <template v-slot:activator="{ on, attrs }">
                                <v-text-field
                                    v-model="due"
                                    label="Pick a date"
                                    prepend-icon="mdi-calendar"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                    :value="due"
                                ></v-text-field>
                            </template>
                            <v-date-picker v-model="due" no-title scrollable>
                            </v-date-picker>
                        </v-menu>
                    </v-form>
                </v-card-text>

                <v-divider></v-divider>

                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" text @click="submit">
                        Add Project
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
import axios from "axios";
import format from "date-fns/format";
export default {
    data() {
        return {
            dialog: false,
            title: "",
            content: "",

            due: new Date().toISOString().substr(0, 10),
            inputRules: [v => v.length >= 3 || "Minimum range in 3 character"]
        };
    },
    methods: {
        submit() {
            if (this.$refs.form.validate()) {
                // const project = {
                //     title: this.title,
                //     title: this.content,
                //     due: this.due(new Date().toISOString().substr(0, 10)),
                //     person: "Touhidur",
                //     status: "Ongoing"
                // };

                axios
                    .post("http://localhost:8000/api/projects", {
                        title: this.title,
                        title: this.content,
                        due: this.due,
                        person: "Touhidur",
                        status: "Ongoing"
                    })
                    .then(res => {
                        console.log(res);
                    })
                    .catch(err => {
                        console.log(err);
                    });
            }
        }
    },
    computed: {
        formattedDate() {
            return this.due ? format(this.due, "yyyy-MM-dd") : "";
        }
    }
};
</script>

<style></style>
