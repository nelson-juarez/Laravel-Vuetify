require('./bootstrap');

window.Vue = require('vue');
import Vuetify from '../plugins/vuetify'
// import router from '../plugins/router'

Vue.use(Vuetify);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app', require('./components/App.vue').default);
Vue.component('Home', require('./components/Home.vue').default);
Vue.component('Socios', require('./components/Socios.vue').default);

new Vue({
    vuetify: Vuetify, 
    
    el: '#app',
});
