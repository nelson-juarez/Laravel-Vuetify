require('./bootstrap');

window.Vue = require('vue');
import Vuetify from '../plugins/vuetify'
Vue.use(Vuetify);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Home', require('./components/Home.vue').default);

const app = new Vue({
    vuetify: Vuetify,
    el: '#app',
});
