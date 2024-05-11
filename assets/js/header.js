const btn_arrow_left = document.querySelector(".btn-arrow-left");
const btn_arrow_right = document.querySelector(".btn-arrow-right");

if (
  document
    .querySelector("body")
    .contains(document.querySelector(".btn-arrow-right"))
) {
  btn_arrow_right.addEventListener("click", () => {
    const header_item = document.querySelectorAll(".header-item");
    document.querySelector(".header-slider").append(header_item[0]);
  });
}

if (
  document
    .querySelector("body")
    .contains(document.querySelector(".btn-arrow-left"))
) {
  btn_arrow_left.addEventListener("click", () => {
    const header_item = document.querySelectorAll(".header-item");
    document
      .querySelector(".header-slider")
      .prepend(header_item[header_item.length - 1]);
  });
}

if (
  document
    .querySelector("body")
    .contains(document.querySelector(".header-slider"))
) {
  const header_item = document.querySelectorAll(".header-item");
  header_item.forEach((e, index) => {
    e.addEventListener("click", () => {
      document.querySelector(".header-slider").prepend(header_item[index]);
      for (let i = 0; i < index; i++) {
        document.querySelector(".header-slider").append(header_item[i]);
      }
    });
  });

  setInterval(() => {
    const header_item = document.querySelectorAll(".header-item");
    document.querySelector(".header-slider").appendChild(header_item[0]);
  }, 5000);
}

// Dropdown Header
const nav_category = document.querySelector(".nav-category");
const nav_cat_parent_item = nav_category.getElementsByClassName(
  "nav-cat-parent-item"
);

nav_category.addEventListener("mouseover", () => {
  nav_category.classList.add("show");
});
for (let i = 0; i < nav_cat_parent_item.length; i++) {
  nav_cat_parent_item[i].addEventListener("mouseover", () => {
    nav_cat_parent_item[i].classList.add("show");
  });
  nav_cat_parent_item[i].addEventListener("mouseout", () => {
    nav_cat_parent_item[i].classList.remove("show");
  });
}

html.addEventListener("mouseout", (e) => {
  const path = e.composedPath();
  if (path.some((ele) => ele.className === ".nav-category")) {
    return;
  }
  nav_category.classList.remove("show");
});

// Category
const c_top_arrowLeft = document.querySelector(".c-top-arrowLeft");
const c_top_arrowRight = document.querySelector(".c-top-arrowRight");

c_top_arrowRight.addEventListener("click", () => {
  const cb_item = document.querySelectorAll(".cb-item");
  document.querySelector(".c-bottom").append(cb_item[0]);
});
c_top_arrowLeft.addEventListener("click", () => {
  const cb_item = document.querySelectorAll(".cb-item");
  document.querySelector(".c-bottom").prepend(cb_item[cb_item.length - 1]);
});
