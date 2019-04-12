import Vue from 'vue'
import './plugins/vuetify'
import App from './App.vue'
import router from './router'
import store from './store'


import './assets/css/bootstrap.css'
import './assets/css/font-awesome.min.css'
import './assets/css/style.css'



Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
