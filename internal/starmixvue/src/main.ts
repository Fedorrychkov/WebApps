import Vue from 'vue';
import VueRouter from 'vue-router';
import { makeHot, reload } from './util/hot-reload';
import { createRouter } from './router';

const headerComponent = () => import('./components/shared/header').then(({ HeaderComponent }) => HeaderComponent);
// const navbarComponent = () => import(/* webpackChunkName: 'navbar' */'./component/shared/navbar').then(({ NavbarComponent }) => NavbarComponent);

import './assets/sass/main.scss';

if (process.env.ENV === 'development' && module.hot) {
  const headerModuleId = './components/shared/header';

  // first arguments for `module.hot.accept` and `require` methods have to be static strings
  // see https://github.com/webpack/webpack/issues/5668
  makeHot(headerModuleId, headerComponent,
    module.hot.accept('./components/shared/header', () => reload(headerModuleId, (<any>require('./components/shared/header')).HeaderComponent)));
}

new Vue({
  el: '#app-main',
  router: createRouter(),
  components: {
    'vue-header': headerComponent
  }
});
