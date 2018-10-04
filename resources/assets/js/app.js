import './bootstrap';
import router from './routes';
import { store } from './store/index';

new Vue({
    el: '#app',
    router,
    store
});
