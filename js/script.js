"use strict";
// color variable
let WarnaSecond = "#FCA311";
let WarnaPrimary = "#14213D";
let WarnaTeks = "#303948";
let WarnaBackground = "#FAFAFA";
let WarnaTeks2 = "#59616D";

// adaptation variable
let sm = "576px";
let md = "768px";
let lg = "992px";
let xl = "1200px";
let xxl = "1400px";

// media variable
const minMediaQuerySm = window.matchMedia(`(min-width: ${sm})`);
const minMediaQueryMd = window.matchMedia(`(min-width: ${md})`);
const minMediaQueryLg = window.matchMedia(`(min-width: ${lg})`);
const minMediaQueryXl = window.matchMedia(`(min-width: ${xl})`);
const minMediaQueryXxl = window.matchMedia(`(min-width: ${xxl})`);

const maxMediaQuerySm = window.matchMedia(`(max-width: ${sm})`);
const maxMediaQueryMd = window.matchMedia(`(max-width: ${md})`);
const maxMediaQueryLg = window.matchMedia(`(max-width: ${lg})`);
const maxMediaQueryXl = window.matchMedia(`(max-width: ${xl})`);
const maxMediaQueryXxl = window.matchMedia(`(max-width: ${xxl})`);


//preloader
window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
}

//header
if (maxMediaQueryLg.matches) {
    document.querySelector('header > div').classList.add('container-fluid');
    document.querySelector('header > div').classList.remove('container-header');

    document.querySelector('header > div > div:last-child').classList.add('w-100');
    document.querySelector('header > div > div:last-child').classList.remove('w-auto');

    document.querySelector('header').style.margin = "0 0 10px 0";
} else {
    document.querySelector('header > div').classList.add('container-header');
    document.querySelector('header > div').classList.remove('container-fluid');

    document.querySelector('header > div > div:last-child').classList.add('w-auto');
    document.querySelector('header > div > div:last-child').classList.remove('w-100');

    document.querySelector('header').style.margin = "54px 34px";
}