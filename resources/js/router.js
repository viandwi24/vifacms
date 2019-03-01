import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


const router = new VueRouter({
    mode: 'history',
    base: 'admin',
    routes: [
        {
            path: '/',
            name: 'home',
            component: require('./pages/Home.vue').default,
            meta: {
                auth: true
            }
        },
        {
            path: '/login',
            name:' login',
            component: require('./pages/auth/Login.vue').default,
            meta: {
                auth: false
            }
        }
    ]
})


export default router;