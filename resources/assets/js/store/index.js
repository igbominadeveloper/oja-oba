import Vuex from 'vuex';
import Vue from 'vue';
Vue.use(Vuex);

export const store = new Vuex.Store({
	state:{
		products: []
	},
	getters:{
		products(state){
			return state.products;
		}
	},
	mutations:{
		setProducts(state, products){
			state.products = products;
		}
	},
 actions:{
 	fetchProducts({commit}){
 		axios.get('/api/products')
 			.then(response =>{
 				commit('setProducts',response.data)
 			})
 			.catch(error => console.log(error.response))
 	},
 }
});
