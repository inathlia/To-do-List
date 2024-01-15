export default class EditButton {
    taskName;
    editForm;
    editBtn;
    checkBtn;
    editInput;
    constructor(taskName, editForm, editBtn, checkBtn, editInput) {
        this.taskName = taskName;
        this.editForm = editForm;
        this.editBtn = editBtn;
        this.checkBtn = checkBtn;
        this.editInput = editInput;
        this.init();
    }
    activeBtn(index) {
        if (this.taskName[index].classList.contains('d-none')) {
            this.taskName[index].classList.remove('d-none');
            this.editForm[index].classList.add('d-none');
        }
        else {
            this.editForm[index].classList.remove('d-none');
            this.taskName[index].classList.add('d-none');
        }
    }
    fillInputText() {
        this.editInput.forEach((input, index) => {
            console.log(input);
            if (input instanceof HTMLInputElement) {
                input.value = this.taskName[index].textContent || '';
            }
        });
    }
    addBtnEvent() {
        this.editBtn.forEach((btn, index) => {
            btn.addEventListener('click', () => this.activeBtn(index));
        });
        this.checkBtn.forEach((btn, index) => {
            btn.addEventListener('click', () => this.activeBtn(index));
        });
    }
    init() {
        this.addBtnEvent();
        this.fillInputText();
    }
}
//# sourceMappingURL=EditButton.js.map