import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from '../components/login/Login';

Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login }
]


const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})


export default router;