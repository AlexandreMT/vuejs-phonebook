require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/Myfooter.vue');

let Home = require('./components/Home.vue');
let About = require('./components/About.vue');


const routes = [
    { path: '/home', component: Home },
    { path: '/about', component: About }
]

const router = new VueRouter({
    //mode: 'history',
    routes // short for `routes: routes`
})

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

const app = new Vue({
    el: '#app',
    router,
    components: {Myheader, Myfooter}
});
