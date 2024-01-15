import TabNav from "./TabNav.js";
import EditButton from "./EditButton.js";
import TabStatus from "./TabStatus.js";
const menuItems = document.querySelectorAll('[data-tab="menu"] li a');
if (menuItems) {
    const menu = new TabNav(Array.from(menuItems));
}
const taskName = document.querySelectorAll('[data-edit="task-name"]');
const editForm = document.querySelectorAll('[data-edit="form"]');
const editBtn = document.querySelectorAll('[data-edit="button"]');
const checkBtn = document.querySelectorAll('[data-edit="check"]');
const editInput = document.querySelectorAll('[data-edit="input"]');
if (taskName && editForm && editBtn && checkBtn) {
    const edit = new EditButton(Array.from(taskName), Array.from(editForm), Array.from(editBtn), Array.from(checkBtn), Array.from(editInput));
}
const status = document.querySelectorAll('[data-tab=status]');
if (status) {
    const tabStatus = new TabStatus(Array.from(status));
}
//# sourceMappingURL=script.js.map