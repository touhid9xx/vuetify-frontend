import Vue from 'vue';
import App from './components/App';
import router from './routes';


import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'


import common from './helpers/common';

Vue.use(Vuetify, {
    theme: {
        primary:'#9652ff',
        success:'#3cd1c2',
        info:'#ffaa2c',
        error: '#f83e70'
    }
});
Vue.mixin(common);

// export default new Vuetify({
//     theme: {
//       themes: {
//         light: {
//           primary: colors.red.darken1, // #E53935
//           secondary: colors.red.lighten4, // #FFCDD2
//           accent: colors.indigo.base, // #3F51B5
//         },
//       },
//     },
//   })

const app = new Vue({
    el: '#app',
    router: router,
    vuetify: new Vuetify(),
    ...App
});
