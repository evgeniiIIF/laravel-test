"use strict";

(function () {
  const CART = {
    items: [],
    count: 0,

    cartRender(items, count) {
      const sidebarCartList = document.querySelector(".js-sidebar-cart__list");
      const sidebarCartCount = document.querySelector(".js-sidebar-cart__count");
      let allProductsString = ``;

      items.forEach((item, index) => {
        let templateProduct = `
					<li class="sidebar-cart__item">
						<div class="sidebar-cart__product sidebar-product" data-id='${index}'>
							<h4 class="sidebar-product__title">${item.title}</h4>
							<div class="sidebar-product__close-btn"></div>
						</div>
					</li>
				`;

        allProductsString += templateProduct;
        count += item.count;
      });

      sidebarCartList.innerHTML = allProductsString;
      sidebarCartCount.innerHTML = count;
    },

    addProduct() {
      const count = this.count;
      const items = this.items;
      const cartRender = this.cartRender;
      const catalog = document.querySelector(".js-catalog");

      if (catalog) {
        catalog.addEventListener("click", getData);
      }
      function getData(e) {
        let productData = {};
        const cardButton = e.target.closest(".card__button");
        if (cardButton) {
          const parentCart = cardButton.closest(".card");
          productData.title = parentCart.querySelector(".card__link").textContent;
          productData.count = +parentCart.dataset.count;
          items.push(productData);
          cartRender(items, count);
        }
      }
    },

    removeProduct() {
      const sidebarCart = document.querySelector(".js-sidebar-cart");
      const count = this.count;
      const items = this.items;
      const cartRender = this.cartRender;

      if (sidebarCart) {
        sidebarCart.addEventListener("click", removeFromItems);
      }
      function removeFromItems(e) {
        let sidebarCloseButton = e.target.closest(".sidebar-product__close-btn");
        if (sidebarCloseButton) {
          const product = sidebarCloseButton.closest(".sidebar-product");
          items.forEach((item, index, arr) => {
            if (product.dataset.id == index) {
              delete arr[index];
            }
          });
        }
        cartRender(items, count);
      }
    },
    start() {
      this.addProduct();
      this.removeProduct();
    },
  };
  CART.start();
})();
