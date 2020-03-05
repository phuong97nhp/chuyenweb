require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)


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
