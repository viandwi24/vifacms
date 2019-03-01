import './bootstrap'
import Vue from 'vue'
import axios from 'axios';
import VueAxios from 'vue-axios';

import router from './router'
import AppLayout from './layouts/App.vue'

Vue.use(VueAxios, axios);
axios.defaults.baseURL = window.baseurl + '/api';

Vue.router = router
Vue.use(require('@websanova/vue-auth'), {
   auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
   http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
   router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});

const app = new Vue({
    router,
    el: '#app',
    render: h => h(AppLayout)
});