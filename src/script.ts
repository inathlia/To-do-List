import TabNav from "./TabNav.js";

const menuItems = document.querySelectorAll('[data-tab="menu"] li a');
const statusItems = document.querySelectorAll('[data-tab="status"] button');

if(menuItems) {
  const menu = new TabNav(Array.from(menuItems));
  const status = new TabNav(Array.from(statusItems));
}