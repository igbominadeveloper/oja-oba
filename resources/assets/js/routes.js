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
        path:'/products',
        component: require('./views/shop/products/Products.vue')
    }, 

    {
        path:'/product',
        component: require('./views/shop/products/Product.vue')
    }, 

    {
        path:'/products-list',
        component: require('./views/shop/products/Products-list.vue')
    }, 

    {
        path:'/orders',
        component: require('./views/shop/orders/Orders.vue')
    },
    {
        path:'/orders-list',
        component: require('./views/shop/orders/OrderList.vue')
    },

    {
        path:'/invoice',
        component: require('./views/shop/Invoice.vue')
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
    },

    {
        path:'/checkout-1',
        component: require('./views/shop/checkout/Checkout1.vue')
    },

    {
        path:'/checkout-2',
        component: require('./views/shop/checkout/Checkout2.vue')
    },
    
    {
        path:'/checkout-3',
        component: require('./views/shop/checkout/Checkout3.vue')
    },
    
    {
        path:'/checkout-4',
        component: require('./views/shop/checkout/Checkout4.vue')
    },

    {
        path:'/checkout-5',
        component: require('./views/shop/checkout/Checkout5.vue')
    }
];

export default new VueRouter({
    routes,
    // mode: 'history',
    linkActiveClass: 'is-active'
});
