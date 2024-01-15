export default class TabNav {
  menu: Element[];
  activeClass: string;

  constructor(menu: Element[]) {
    this.menu = menu;
    this.activeClass = 'active';

    this.init();
  }

  activeTab(index: number){
    this.menu.forEach((content) => {
      content.classList.remove(this.activeClass);
    });
    this.menu[index].classList.add(this.activeClass);
  };

  private addControls() {
    this.menu.forEach((item, index) => {
      item.addEventListener('click', () => this.activeTab(index));
    });
  }

  private init() {
    this.addControls();
  }
}