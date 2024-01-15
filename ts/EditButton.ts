export default class EditButton {
  taskName: Element[];
  editForm: Element[];
  editBtn: Element[];
  checkBtn: Element[];
  editInput: Element[];

  constructor(taskName: Element[], editForm: Element[], editBtn: Element[], checkBtn: Element[], editInput: Element[]) {
    this.taskName = taskName;
    this.editForm = editForm;
    this.editBtn = editBtn;
    this.checkBtn = checkBtn;
    this.editInput = editInput;

    this.init();
  }

  activeBtn(index: number) {
    if(this.taskName[index].classList.contains('d-none')) {
      this.taskName[index].classList.remove('d-none');
      this.editForm[index].classList.add('d-none');
    } else {
      this.editForm[index].classList.remove('d-none');
      this.taskName[index].classList.add('d-none');
    }
  }

  private fillInputText() {
    this.editInput.forEach((input, index) => {
      if (input instanceof HTMLInputElement) {
        input.value = this.taskName[index].textContent || '';
      }
    });
  }

  private addBtnEvent() {
    this.editBtn.forEach((btn, index) => {
      btn.addEventListener('click', () => this.activeBtn(index));
    });  
    this.checkBtn.forEach((btn, index) => {
      btn.addEventListener('click', () => this.activeBtn(index));
    });
  }

  private init() {
    this.addBtnEvent();
    this.fillInputText();
  }

}