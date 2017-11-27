import Vue from 'vue';
import { Component, Watch } from 'vue-property-decorator';
import { Logger } from '../../../util/log';
import { makeHot, reload } from '../../../util/hot-reload';

import './header.scss';

@Component({
  template: require('./header.html')
})

export class HeaderComponent extends Vue {

  protected logger: Logger;

  object: { default: string } = { default: 'Default object property - header!' }; // objects as default values don't need to be wrapped into functions

  mounted() {
    if (!this.logger) this.logger = new Logger();
    this.$nextTick(() => this.logger.info(this.object.default));
  }
}


const navbarComponent = () => import('../navbar').then(({ NavbarComponent }) => NavbarComponent);


if (process.env.ENV === 'development' && module.hot) {
    const navbarModuleId = '../navbar';
  
    // first arguments for `module.hot.accept` and `require` methods have to be static strings
    // see https://github.com/webpack/webpack/issues/5668
    makeHot(navbarModuleId, navbarComponent,
      module.hot.accept('../navbar', () => reload(navbarModuleId, (<any>require('../navbar')).NavbarComponent)));
}

// new Vue({
//     components: {
//         'navbar': navbarComponent
//     }
// });
Vue.component('navbar', navbarComponent);