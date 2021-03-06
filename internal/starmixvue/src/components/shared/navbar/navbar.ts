import { Collapse, Dropdown } from 'uiv';
import Vue from 'vue';
import { Component, Watch } from 'vue-property-decorator';
import { Link } from './link';
import { Logger } from '../../../util/log';
import './navbar.scss';

@Component({
  template: require('./navbar.html'),
  components: {
    collapse: Collapse,
  }
})
export class NavbarComponent extends Vue {

  protected logger: Logger;

  public showNavbar: Boolean = false;

  object: { default: string } = { default: 'Default object property! - navbar' }; // objects as default values don't need to be wrapped into functions

  links: Link[] = [
    new Link('Магазин', '/shop'),
    new Link('Категории', '/category')
  ];

  @Watch('$route.path')
  pathChanged() {
    this.logger.info('Changed current path to: ' + this.$route.path);
  }

  mounted() {
    if (!this.logger) this.logger = new Logger();
    this.$nextTick(() => this.logger.info(this.object.default));
  }
}
