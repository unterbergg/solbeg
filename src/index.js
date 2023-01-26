import "./scss/style.scss";

import device from "current-device";
import Headroom from "headroom.js";
import Goodshare from "goodshare.js";
import fitvids from "fitvids";
import axios from 'axios';

import "./js/**/*.js";

import LoadMore from './js/loadmore.js';
import modal from "./js/modal";
import animate from "./js/animate";

// Helper detect link by selector
window.isLink = (el, selector) => el.matches(selector) || el.closest(selector);

// FitVids
fitvids();

// Headroom
const headroom = new Headroom(document.querySelector('header.header'));
headroom.init();

// Menu overlay toggle
const menuToggle = document.getElementById("menu-toggle");
menuToggle.addEventListener('change', () => {
    document.body.classList.toggle('show-menu');
});

document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById("posts")) {
        const loadmore = new LoadMore();
    }
})

// CF7 handlers
document.addEventListener('wpcf7mailsent', () => {
    modal.ajax('/modal/success/');
});
document.addEventListener('wpcf7mailfailed', () => {
    modal.ajax('/modal/fail/');
});

// Set loaded class to html
window.addEventListener('load', () => {
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log("Late page loaded class");
            document.documentElement.classList.toggle('loaded');
            resolve();
        }, 500);
    });
});

// Header submenu tint
const submenus = document.querySelectorAll('.header .menu-item-has-children');
const headerTint = document.querySelector('.header-tint');
submenus.length && submenus.forEach(item => {
    item.addEventListener('mouseenter', () => {
        headerTint.classList.add('visible');
    });
    item.addEventListener('mouseleave', () => {
        headerTint.classList.remove('visible');
    });
});
