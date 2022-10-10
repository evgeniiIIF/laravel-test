!function(){"use strict";var t,n={276:function(){!function(){var t,n={Android:function(){return navigator.userAgent.match(/Android/i)},BlackBerry:function(){return navigator.userAgent.match(/BlackBerry/i)},iOS:function(){return navigator.userAgent.match(/iPhone|iPad|iPod/i)},Opera:function(){return navigator.userAgent.match(/Opera Mini/i)},Windows:function(){return navigator.userAgent.match(/IEMobile/i)},any:function(){return n.Android()||n.BlackBerry()||n.iOS()||n.Opera()||n.Windows()}},r=document.body;function e(){var t=document.querySelector(".js-cards");n.any()?(r.classList.contains("pc")&&r.classList.remove("pc"),r.classList.add("mobile"),t.addEventListener("click",o)):(r.classList.contains("mobile")&&r.classList.remove("mobile"),r.classList.add("pc"),t.removeEventListener("click",o))}function o(n){var r=n.target.closest(".card");if(r){if(n.target.closest(".card__button"))return;r.classList.toggle("card--show-control")}t&&t!==r&&t.classList.remove("card--show-control"),console.log(),t=r}window.addEventListener("resize",e),e()}()},752:function(){({items:[],count:0,cartRender:function(t,n){var r=document.querySelector(".js-sidebar-cart__list"),e=document.querySelector(".js-sidebar-cart__count"),o="";t.forEach((function(t,r){var e='\n\t\t\t\t\t<li class="sidebar-cart__item">\n\t\t\t\t\t\t<div class="sidebar-cart__product sidebar-product" data-id=\''.concat(r,'\'>\n\t\t\t\t\t\t\t<h4 class="sidebar-product__title">').concat(t.title,'</h4>\n\t\t\t\t\t\t\t<div class="sidebar-product__close-btn"></div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</li>\n\t\t\t\t');o+=e,n+=t.count})),r.innerHTML=o,e.innerHTML=n},addProduct:function(){var t=this.count,n=this.items,r=this.cartRender,e=document.querySelector(".js-catalog");e&&e.addEventListener("click",(function(e){var o={},c=e.target.closest(".card__button");if(c){var i=c.closest(".card");o.title=i.querySelector(".card__link").textContent,o.count=+i.dataset.count,n.push(o),r(n,t)}}))},removeProduct:function(){var t=document.querySelector(".js-sidebar-cart"),n=this.count,r=this.items,e=this.cartRender;t&&t.addEventListener("click",(function(t){var o=t.target.closest(".sidebar-product__close-btn");if(o){var c=o.closest(".sidebar-product");r.forEach((function(t,n,r){c.dataset.id==n&&delete r[n]}))}e(r,n)}))},start:function(){this.addProduct(),this.removeProduct()}}).start()},219:function(t,n,r){r(276),r(752)},509:function(){}},r={};function e(t){var o=r[t];if(void 0!==o)return o.exports;var c=r[t]={exports:{}};return n[t](c,c.exports,e),c.exports}e.m=n,t=[],e.O=function(n,r,o,c){if(!r){var i=1/0;for(d=0;d<t.length;d++){r=t[d][0],o=t[d][1],c=t[d][2];for(var a=!0,s=0;s<r.length;s++)(!1&c||i>=c)&&Object.keys(e.O).every((function(t){return e.O[t](r[s])}))?r.splice(s--,1):(a=!1,c<i&&(i=c));if(a){t.splice(d--,1);var u=o();void 0!==u&&(n=u)}}return n}c=c||0;for(var d=t.length;d>0&&t[d-1][2]>c;d--)t[d]=t[d-1];t[d]=[r,o,c]},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,{a:n}),n},e.d=function(t,n){for(var r in n)e.o(n,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:n[r]})},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},function(){var t={548:0,30:0};e.O.j=function(n){return 0===t[n]};var n=function(n,r){var o,c,i=r[0],a=r[1],s=r[2],u=0;if(i.some((function(n){return 0!==t[n]}))){for(o in a)e.o(a,o)&&(e.m[o]=a[o]);if(s)var d=s(e)}for(n&&n(r);u<i.length;u++)c=i[u],e.o(t,c)&&t[c]&&t[c][0](),t[c]=0;return e.O(d)},r=self.webpackChunk=self.webpackChunk||[];r.forEach(n.bind(null,0)),r.push=n.bind(null,r.push.bind(r))}(),e.O(void 0,[30],(function(){return e(219)}));var o=e.O(void 0,[30],(function(){return e(509)}));o=e.O(o)}();