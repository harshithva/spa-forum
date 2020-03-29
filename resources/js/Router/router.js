import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from '../components/login/Login';
import Signup from '../components/login/Signup';

Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: Signup }
]


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})


export default router;