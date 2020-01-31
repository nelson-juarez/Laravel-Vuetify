require('./bootstrap');

// window.Vue = require('vue');
// import Vuetify from '../plugins/vuetify'
// // import router from '../plugins/router'

// import Vue from 'vue';
// import VueRouter from 'vue-router';
// import Vuetify from 'vuetify/lib';
// import {routes} from './routes';
// import MainApp from './components/MainApp.vue';
// import Home from './components/Home.vue';

// //Vue.use(Vuetify);
// //Vue.use(VueRouter);

// /*
// const router = new VueRouter({
//     routes,
//     mode: 'history'
//   })
//   */

// //Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('app', require('./components/App.vue').default);
// //Vue.component('Home', require('./components/Home.vue').default);
// //Vue.component('Socios', require('./components/Socios.vue').default);

// const app = new Vue({
//     el: '#app',
//     vuetify:Vuetify
// //    router,
//   //  components: {
//     //    MainApp, Home
//     //}    
// });


import Vue from 'vue';
import App from './components/App.vue';
import router from './routes';
import vuetify from '../plugins/vuetify';


Vue.config.productionTip = false;

new Vue({
    router,
    vuetify,
    render: h => h(App)
}).$mount('#app');