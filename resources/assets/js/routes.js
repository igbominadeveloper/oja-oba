import VueRouter from 'vue-router';

const routes = [
    {
        path:'/',
        component: require('./views/Home.vue')
    },
    {
        path:'/auth',
        component: require('./views/auth/Authentication.vue')
    }, 
    {
        path:'/wishlist',
        component: require('./views/shop/Wishlist.vue')
    }, 

    {
        path:'/cart',
        component: require('./views/shop/Cart.vue')
    }, 

    {
        path:'/orders',
        component: require('./views/shop/Orders.vue')
    },
    {
        path:'/account',
        component: require('./views/auth/Account.vue')
    },

    {
        path:'/account/edit',
        component: require('./views/auth/AccountEdit.vue')
    },
    {
        path:'/shop',
        component: require('./views/shop/Shop.vue')
    }
];

export default new VueRouter({
    routes,
    // mode: 'history',
    linkActiveClass: 'is-active'
});
