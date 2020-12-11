require('./bootstrap');


window.Vue = require('vue');

import Vue from 'vue';
import App from './App.vue'

import InstantSearch from 'vue-instantsearch';
Vue.use(InstantSearch);

new Vue({
	el: '#app',
	render: h => h(App)
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

const search = instantsearch({
  indexName: 'demo_ecommerce',
  searchClient,
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: '#searchbox',
  }),

  instantsearch.widgets.hits({
    container: '#hits',
  })
]);

search.start();
