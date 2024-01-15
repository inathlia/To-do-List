export default class TabNav {
    menu;
    activeClass;
    urlParams;
    paramValue;
    constructor(menu) {
        this.menu = menu;
        this.activeClass = 'active';
        this.urlParams = new URLSearchParams(window.location.search);
        this.paramValue = this.urlParams.get('filter') || null;
        this.init();
    }
    activeTab() {
        this.menu.forEach((content) => {
            content.classList.remove(this.activeClass);
        });
        if (this.paramValue == null)
            this.menu[0].classList.add(this.activeClass);
        else
            this.menu[Number(this.paramValue) + 1].classList.add(this.activeClass);
    }
    ;
    init() {
        this.activeTab();
    }
}
//# sourceMappingURL=TabNav.js.map