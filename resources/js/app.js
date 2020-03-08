require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router'
import Meta from 'vue-meta'
import axios from 'axios'
import VueAxios from 'vue-axios'


Vue.use(VueRouter)
Vue.use(Meta)
Vue.use(VueAxios, axios)


import { routes } from './routes';

Vue.component('home-component', require('./components/HomeComponent.vue').default);

const router = new VueRouter({
	mode: 'history',
	routes: routes // short for `routes: routes`
})

const app = new Vue({
	el: '#app',
	router: router,
	template: '<router-view></router-view>'
});
