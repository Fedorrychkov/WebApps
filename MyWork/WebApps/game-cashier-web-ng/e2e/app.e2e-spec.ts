import { GameCashierWebPage } from './app.po';

describe('game-cashier-web App', () => {
  let page: GameCashierWebPage;

  beforeEach(() => {
    page = new GameCashierWebPage();
  });

  it('should display welcome message', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('Welcome to app!');
  });
});
