import VueRouter from 'vue-router';

const routes = [
    {
        path:'/',
        component: require('./views/Home.vue')
    },
    {
        path:'/auth',
        component: require('./views/Authentication.vue')
    },
    {
        path:'/shop',
        component: require('./views/Shop.vue')
    }
];

export default new VueRouter({
    routes,
    mode: 'history'
});
