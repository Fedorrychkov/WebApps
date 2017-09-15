import Vue from 'vue';
import VueResource from 'vue-resource';

import App from './App.vue';

Vue.use(VueResource);

new Vue({
  el: '#app',
  render: h => h(App),
  data: {
    endpoint: 'https://jsonplaceholder.typicode.com/posts'
  },
  method: {
    getAllPosts: function() {
      this.$http.get(this.endpoint).then(function(res) {
        console.log(res);
      }, function(err){
        //error
      })
    }
  },
  created: function() {
    this.getAllPosts();
  }
})
