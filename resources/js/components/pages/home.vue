<template>
    <div class="home">
        <v-container>
            <h3 class="light-blue lighten-1">Home page</h3>
            <div>
                <v-container>
                    <p class="red white--text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Ut eveniet quaerat eius velit sed nulla. Id
                        eveniet accusantium, quasi, obcaecati, amet expedita eos
                        incidunt eligendi ea molestiae doloribus soluta
                        laudantium!
                    </p>
                    <p class="pink lighten-4 dark--text text--darken-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Tempora illum in vero expedita sapiente ipsum ea
                        quaerat error sint voluptates, ipsa dolores, cupiditate
                        magni numquam, mollitia labore reprehenderit? Ab,
                        cupiditate.
                    </p>
                    <h1 class="display-4 ">Massive display</h1>
                    <h4 class="display-1">Smaller display</h4>
                    <p class="heading font-weight-bold">this is a headline</p>
                    <p class="subheading">this is subheading</p>
                    <p class="caption text-capitalized">this is a caption</p>
                </v-container>
            </div>

            <div>
                <v-container>
                    <v-btn class="pink white--text">Click me</v-btn>
                    <v-btn color="pink" dark> Click me again</v-btn>
                    <v-btn depressed color="pink">Depress</v-btn>
                    <v-btn color="pink" icon>Flat</v-btn>
                    <v-btn color="accent" fab
                        ><v-icon>arrow_circle_down</v-icon></v-btn
                    >
                    <br />
                    <v-btn depressed class="pink white--text" sizing="20">
                        <v-icon>alarm</v-icon>
                        <span>Email me</span>
                    </v-btn>
                    <v-btn depressed small class="pink white--text" sizing="20">
                        <v-icon left small>alarm</v-icon>
                        <span> Lelt me</span>
                    </v-btn>
                    <v-btn depressed large class="pink white--text">
                        <span>Right me</span>
                        <v-icon right large>alarm</v-icon>
                    </v-btn>
                    <br />

                    <v-btn depressed small dark color="purple">
                        <span>Right me</span>
                        <v-icon right small>alarm</v-icon>
                    </v-btn>
                </v-container>
            </div>
        </v-container>
        <v-container>
            <h3 class="light-blue lighten-1">Break points</h3>
            <v-btn class="hidden-md-and-down">Break points</v-btn>
            <br />
            <v-btn class="hidden-md-and-up">Hidden up</v-btn>
            <br />
            <v-btn class="hidden-sm-only">Hidden Small</v-btn>
        </v-container>
    </div>
</template>

<script></script>

<style></style>
