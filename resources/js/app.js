require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import {routes} from "./routes";
import MainApp from './components/MainApp';

Vue.use(VueRouter);
Vue.use(Vuex);


const router = new VueRouter({
    mode: 'history',
    routes,
});

const app = new Vue({
    el: '#app',
    components: { MainApp },
    router,
});
