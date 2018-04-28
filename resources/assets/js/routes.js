import VueRouter from 'vue-router'

let routes = [
    {
        path:'/weixin/login',
        name: 'login',
        component:require('./components/login/Index')
    },
    {
        path:'/weixin/home',
        name: 'home',
        component:require('./components/training/Index')
    },
    {
        path:'/weixin/interaction',
        name: 'interaction',
        component:require('./components/interaction/Index')
    },
    {
        path:'/weixin/punchcard',
        name: 'punchcard',
        component:require('./components/punchcard/Index')
    },
    //文章列表路由
    {
        path: '/weixin/home/:tag/:icon/:id',
        name: 'trainingList',
        component: require('./components/training/List')
    },

    {
        path:'/weixin/home/posts/:tid/:id',
        name: 'detail',
        component:require('./components/training/Detail')
    }

];


export default new VueRouter({
    mode: 'history',
    routes
})
