import './bootstrap';
import router from './routes';
import { store } from './store/index';

new Vue({
    el: '#app',
    components:{
    	'app-header' : require('./components/Header.vue')
    },
    router,
    store
});
