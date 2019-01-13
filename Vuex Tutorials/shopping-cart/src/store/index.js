import Vuex from 'vuex'
import Vue from 'vue'

Vue.use(Vuex)

export default new Vuex.Store({
    state: { //data
        products: []

    },
    getters: {
        productsCount () {
            // ..
        }
    },
    actions: {
        fetchProducts () {
            //make de call
            // run setProducts mutations
        }
    },
    mutations: {
        setProducts (state, products) {
            // update products
            state.products = products
          }
        }
      })