export default class TabNav {
    menu;
    activeClass;
    constructor(menu) {
        this.menu = menu;
        this.activeClass = 'active';
        this.init();
    }
    activeTab(index) {
        this.menu.forEach((content) => {
            content.classList.remove(this.activeClass);
        });
        this.menu[index].classList.add(this.activeClass);
    }
    ;
    addControls() {
        this.menu.forEach((item, index) => {
            item.addEventListener('click', () => this.activeTab(index));
        });
    }
    init() {
        this.addControls();
    }
}
//# sourceMappingURL=TabNav.js.map