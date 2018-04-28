require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
import router from './routes'
import FaskClick from 'fastclick';

Vue.use(VueRouter);
Vue.component('tabbar', require('./components/Tabbar'));
FaskClick.attach(document.body);

const app = new Vue({
    el: '#app',
    router,
    computed: {
        tabbarShow: function () {
            return this.$route.name !== 'login'
        }
    }
});





