export default class TabStatus {
  statusDiv: Element[] | HTMLDivElement[];

  constructor(statusDiv: Element[]) {
    this.statusDiv = statusDiv;

    this.init();
  }

  private changeStatus() {
    this.statusDiv.forEach(div => {
      if (div instanceof HTMLDivElement && div.children.length) {
        div.children[0].classList.remove("active");
        div.children[1].classList.remove("active");
        div.children[2].classList.remove("active");
        if (div.classList.contains('status-0')) {
          div.children[0].classList.add("active");
        } else if (div.classList.contains('status-1')) {
          div.children[1].classList.add("active");
        } else if (div.classList.contains('status-2')) {
          div.children[2].classList.add("active");
        }
      }
    });
  }

  private init() {
    this.changeStatus();
  }
}