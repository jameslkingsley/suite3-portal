require('./bootstrap');
require('./filters');

Vue.component('grid', require('./components/Grid.vue'));
Vue.component('grid-child', require('./components/GridChild.vue'));

import Signup from './components/Signup';

const app = new Vue({
    el: '#app',
    components: { Signup }
});
