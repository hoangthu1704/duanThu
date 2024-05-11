// Alert
const eleDivAlers = document.querySelectorAll(".alert");
const btn_alert = document.querySelectorAll(".btn-close");

btn_alert.forEach(function (btn, index) {
  btn.addEventListener("click", function () {
    eleDivAlers[index].remove();
  });
});

// Dropdown
const eleDropdown = document.querySelectorAll(".dropdown");
const dropdownMenu = document.querySelectorAll(".dropdown-menu");

eleDropdown.forEach((ele, index) => {
  ele.addEventListener("click", () => {
    dropdownMenu[index].classList.toggle("show");
  });
});

const html = document.documentElement;
html.addEventListener("click", (e) => {
  const path = e.composedPath(); // Trả về tất cả các phần tử tại sự kiện hiện tại theo đúng thứ tự
  if (
    path.some((ele) => ele.className === "dropdown") ||
    path.some((ele) => ele.className === "btn-group")
  ) {
    // Some để lấy giá từ mãng với điều kiện cụ thể
    return;
  }
  dropdownMenu.forEach((ele) => {
    ele.classList.remove("show");
  });
});

const dropdown_toggle_split = document.querySelectorAll(
  ".dropdown-toggle-split"
);
const dropdown_toggle_split_menu = document.querySelectorAll(
  ".btn-group .dropdown-menu"
);
dropdown_toggle_split.forEach((ele, index) => {
  ele.addEventListener("click", () => {
    dropdown_toggle_split_menu[index].classList.toggle("show");
  });
});

// // Pagination
// const page_item = document.querySelectorAll(".page-item");
// page_item.forEach((ele, index) => {
//   const eleValue = ele.getAttribute("value");
//   ele.addEventListener("click", (e) => {
//     const path = e.composedPath();
//     path.forEach((e) => {
//       if (e.getAttribute("value") === eleValue) {
//         ele.classList.toggle("active");
//       } else {
//         page_item.forEach((e, inde) => {
//           if (inde !== index) {
//             e.classList.remove("active");
//           }
//         });
//       }
//     });
//   });
// });

// Range Slider

if (document.querySelector("body").contains(document.querySelector(".range"))) {
  const rsl_value = document.querySelector(".rsl-value");
  const inputRange = document.querySelector(".range");
  inputRange.addEventListener("mousemove", () => {
    const valueRange = inputRange.value;
    rsl_value.innerText = valueRange;
  });
}

// Rating

const ratingStar = document.querySelectorAll(".rating img");
ratingStar.forEach((e, index) => {
  e.addEventListener("mouseover", () => {
    for (let i = 0; i <= index; i++) {
      ratingStar[i].src = "assets/images/star.png";
    }
  });
  e.addEventListener("mouseout", () => {
    for (let i = index; i <= ratingStar.length; i++) {
      ratingStar[i].src = "assets/images/unstar.png";
    }
  });
  e.addEventListener("click", () => {
    console.log(e.getAttribute("alt"));
  });
});

// Toast
const btn = document.querySelectorAll(".btn");
const toast = document.querySelectorAll(".toast");
const btnCloseToast = document.querySelectorAll(".toast-close-button");
btn.forEach((e, index) => {
  e.addEventListener("click", (e) => {
    const path = e.composedPath();
    console.log(path);
    if (path.some((ele) => ele.className === "btn btn-outline-success")) {
      toast.forEach((e, index) => {
        if (e.className === "toast toast-success") {
          e.classList.toggle("show");
          setTimeout(() => {
            e.classList.remove("show");
          }, 4000);
        }
      });
    }

    if (path.some((ele) => ele.className === "btn btn-outline-danger")) {
      toast.forEach((e, index) => {
        if (e.className === "toast toast-danger") {
          e.classList.toggle("show");
          setTimeout(() => {
            e.classList.remove("show");
          }, 4000);
        }
      });
    }

    if (path.some((ele) => ele.className === "btn btn-outline-warning")) {
      toast.forEach((e, index) => {
        if (e.className === "toast toast-warning") {
          e.classList.toggle("show");
          setTimeout(() => {
            e.classList.remove("show");
          }, 4000);
        }
      });
    }
  });
});

// Tabs
const nav_item = document.querySelectorAll(".nav-item");
const tab_pane = document.querySelectorAll(".tab-pane");

nav_item.forEach((e, index) => {
  e.addEventListener("click", () => {
    nav_item.forEach((e) => {
      e.classList.remove("show");
    });
    e.classList.add("show");
    tab_pane.forEach((e) => {
      e.classList.remove("active");
    });
    tab_pane[index].classList.add("active");
  });
});

// Form Select
const form_select = document.querySelectorAll(".form-select");

form_select.forEach((e, index) => {
  e.addEventListener("click", () => {
    e.classList.add("active");
  });
});

// Form Select Type 2
const customSelect = document.querySelectorAll(".custom-select");
const selectBtn = document.querySelectorAll(".select-button");
selectBtn.forEach((e, index) => {
  e.addEventListener("click", () => {
    customSelect[index].classList.toggle("active");
    e.setAttribute(
      "aria-expanded",
      e.getAttribute("aria-expanded") === "true" ? "false" : "true"
    );
  });
  const selectedValue = document.querySelectorAll(".selected-value");
  const optionList = document.querySelectorAll(".select-dropdown li");

  optionList.forEach((option) => {
    function handler(e) {
      if (e.type === "click" && e.clientX !== 0 && e.clientY !== 0) {
        selectedValue[index].textContent = this.children[1].textContent;
        customSelect[index].classList.remove("active");
      }
      if (e.type === "Enter") {
        selectedValue[index].textContent = this.textContent;
        customSelect[index].classList.remove("active");
      }
    }
    option.addEventListener("keyup", handler);
    option.addEventListener("click", handler);
  });
});

// Form Select Type 3
const select_input = document.querySelectorAll(".select-input");
select_input.forEach((e, index) => {
  const select_input_button = e.getElementsByTagName("button")[0]; // eleButton
  const select_input_dropdown = e.getElementsByTagName("ul")[0]; // eleUl
  const select_input_li = e.getElementsByTagName("li"); // eleLi
  const select_input_search = e.getElementsByTagName("input")[0]; // eleInputSearch
  const select_input_button_arrow =
    select_input_button.getElementsByTagName("span")[1];
  select_input_button.addEventListener("click", () => {
    select_input_dropdown.classList.toggle("show");
    select_input_button_arrow.classList.toggle("active");
    for (let i = 1; i < select_input_li.length; i++) {
      select_input_li[i].style.display = "";
    }
    select_input_search.addEventListener("keyup", () => {
      const select_input_search_value = select_input_search.value.toUpperCase(); // Value Of Input Search
      for (let i = 1; i < select_input_li.length; i++) {
        const select_input_label_value =
          select_input_li[i]
            .getElementsByTagName("label")[0]
            .textContent.toUpperCase() ||
          select_input_li[i]
            .getElementsByTagName("label")[0]
            .innerText.toUpperCase();
        if (select_input_label_value.indexOf(select_input_search_value) > -1) {
          select_input_li[i].style.display = "";
        } else {
          select_input_li[i].style.display = "none";
        }
      }
    });
    for (let i = 1; i < select_input_li.length; i++) {
      select_input_li[i].addEventListener("click", () => {
        console.log(select_input_li[i].getElementsByTagName("input")[0].value);
        const select_input_button_value =
          select_input_button.getElementsByTagName("span")[0];
        select_input_button_value.textContent =
          select_input_li[i].textContent || select_input_li[i].innerText;
        select_input_search.value =
          select_input_li[i].getElementsByTagName("input")[0].value;
        select_input_dropdown.classList.remove("show");
        // select_input_search.value = "";
      });
    }
  });
});
// Form Wizard
const form_wizard_item = document.querySelectorAll(".form-wizard-item");
const tooltip_top = document.querySelectorAll(".tooltip-top");
const form_wizard_pane = document.querySelectorAll(".form-wizard-pane");
form_wizard_item.forEach((e, index) => {
  e.addEventListener("click", () => {
    form_wizard_item.forEach((e, index) => {
      e.classList.remove("active");
    });
    e.classList.add("active");
    tooltip_top.forEach((e) => {
      e.classList.remove("show");
    });
    tooltip_top[index].classList.add("show");
    form_wizard_pane.forEach((e) => {
      e.classList.remove("show");
    });
    form_wizard_pane[index].classList.add("show");
    if (index === 1) {
      form_wizard_pre.classList.add("show");
      form_wizard_save.classList.remove("show");
      form_wizard_next.classList.add("show");
      document.querySelector(".form-wizard").setAttribute("value", 1);
    }
    if (index === 2) {
      form_wizard_pre.classList.add("show");
      form_wizard_save.classList.add("show");
      form_wizard_next.classList.remove("show");
      document.querySelector(".form-wizard").setAttribute("value", 2);
    }
    if (index === 0) {
      form_wizard_pre.classList.remove("show");
      form_wizard_save.classList.remove("show");
      form_wizard_next.classList.add("show");
      document.querySelector(".form-wizard").setAttribute("value", 0);
    }
  });
});

const form_wizard_pre = document.querySelector(".form-wizard-pre");
const form_wizard_next = document.querySelector(".form-wizard-next");
const form_wizard_save = document.querySelector(".form-wizard-save");
if (
  document
    .querySelector("body")
    .contains(document.querySelector(".form-wizard-next"))
) {
  form_wizard_next.addEventListener("click", (e) => {
    form_wizard_item.forEach((e, index) => {
      e.classList.remove("active");
    });
    tooltip_top.forEach((e) => {
      e.classList.remove("show");
    });
    const form_wizard = document.querySelector(".form-wizard");
    var form_wizard_value = Number(form_wizard.getAttribute("value"));

    form_wizard.setAttribute("value", form_wizard_value + 1);
    form_wizard_value = Number(form_wizard.getAttribute("value"));
    if (form_wizard_value === 1) {
      form_wizard_item[form_wizard_value].classList.add("active");
      form_wizard_pre.classList.add("show");
      tooltip_top[form_wizard_value].classList.add("show");
    }
    if (form_wizard_value === 2) {
      form_wizard_item[form_wizard_value].classList.add("active");
      form_wizard_pre.classList.add("show");
      form_wizard_save.classList.add("show");
      form_wizard_next.classList.remove("show");
      tooltip_top[form_wizard_value].classList.add("show");
    }
  });
}

if (
  document
    .querySelector("body")
    .contains(document.querySelector(".form-wizard-pre"))
) {
  form_wizard_pre.addEventListener("click", (e) => {
    form_wizard_item.forEach((e, index) => {
      e.classList.remove("active");
    });
    tooltip_top.forEach((e) => {
      e.classList.remove("show");
    });

    const form_wizard = document.querySelector(".form-wizard");
    var form_wizard_value = Number(form_wizard.getAttribute("value"));

    form_wizard.setAttribute("value", form_wizard_value - 1);
    form_wizard_value = Number(form_wizard.getAttribute("value"));
    if (form_wizard_value === 0) {
      form_wizard_item[form_wizard_value].classList.add("active");
      form_wizard_pre.classList.remove("show");
      tooltip_top[form_wizard_value].classList.add("show");
    }
    if (form_wizard_value === 1) {
      form_wizard_item[form_wizard_value].classList.add("active");
      form_wizard_pre.classList.add("show");
      form_wizard_save.classList.remove("show");
      form_wizard_next.classList.add("show");
      tooltip_top[form_wizard_value].classList.add("show");
    }
  });
}

// Form Search
if (
  document
    .querySelector("body")
    .classList.contains(document.querySelector(".form-search"))
) {
  const inputSearch = document.querySelector(".form-search"); // eleInput
  const form_search_result = document.querySelector(".form-search-result"); // eleUl
  const form_search_item = document.querySelectorAll(".form-search-item"); // eleLi

  inputSearch.addEventListener("keyup", () => {
    console.log(inputSearch.value !== "");
    if (inputSearch.value !== "") {
      form_search_result.classList.add("show");
    } else {
      form_search_result.classList.remove("show");
    }

    const inputValue = inputSearch.value.toUpperCase(); // Value of Input When Typing
    for (let i = 0; i < form_search_item.length; i++) {
      const ele_a = form_search_item[i].getElementsByTagName("a")[0];
      const ele_a_value = ele_a.textContent || ele_a.innterText;
      if (ele_a_value.toUpperCase().indexOf(inputValue) > -1) {
        form_search_item[i].style.display = "";
      } else {
        form_search_item[i].style.display = "none";
      }
    }
  });

  html.addEventListener("click", (e) => {
    const path = e.composedPath(); // Trả về tất cả các phần tử tại sự kiện hiện tại theo đúng thứ tự
    console.log(path.some((ele) => ele.className === "form-search"));
    if (path.some((ele) => ele.className === "form-search")) {
      // Some để lấy giá từ mãng với điều kiện cụ thể
      return;
    }
    form_search_result.classList.remove("show");
  });
}

// Checkbox
const form_checkbox = document.querySelectorAll(".form-checkbox");
form_checkbox.forEach((e) => {});
// Radio
const form_radios = document.querySelectorAll(".form-radios");

form_radios.forEach((e) => {
  const form_radio = e.getElementsByTagName("input");

  for (let i = 0; i < form_radio.length; i++) {
    form_radio[i].addEventListener("click", () => {
      for (let i = 0; i < form_radio.length; i++) {
        form_radio[i].checked = false;
      }
      form_radio[i].checked = true;
    });
  }
});

// Database Tables
const dataTables = document.querySelectorAll(".dataTables");

dataTables.forEach((e) => {
  const data_search = e.getElementsByTagName("input")[0]; // eleInputSearch
  const data_tbody = e.getElementsByTagName("tbody")[0]; // eleTbody
  const data_tbody_tr = data_tbody.getElementsByTagName("tr"); // eleTbodyTr
  const data_checkbox = e.getElementsByTagName("input");
  const data_icon_filter = e
    .getElementsByClassName("data-icon-filter")[0]
    .getElementsByTagName("svg");
  const select_input_dropdown = e.getElementsByClassName(
    "select-input-dropdown"
  );
  const data_icon_filter_reset = e.getElementsByClassName(
    "data-icon-filter-reset"
  )[0];

  data_icon_filter_reset.addEventListener("click", () => {
    for (let x = 0; x < data_tbody_tr.length; x++) {
      data_tbody_tr[x].setAttribute("search", "true");
      data_tbody_tr[x].style.display = "";
    }
    const value_default = e.getElementsByClassName("default");
    const select_value = e.getElementsByClassName("select-input-button-value");
    for (let i = 0; i < value_default.length; i++) {
      select_value[i].textContent = value_default[i].textContent;
    }
    data_search.value = "";
  });

  for (let i = 0; i < select_input_dropdown.length; i++) {
    const select_input_dropdown_li =
      select_input_dropdown[i].getElementsByTagName("li");
    for (let j = 0; j < select_input_dropdown_li.length; j++) {
      select_input_dropdown_li[j].addEventListener("click", () => {
        const value_filter = select_input_dropdown_li[j].textContent
          .trim()
          .toUpperCase();
        for (let x = 0; x < data_tbody_tr.length; x++) {
          const data_tbody_td = data_tbody_tr[x].getElementsByTagName("td"); // eleTbodyTd
          var count = 0;
          if (data_tbody_tr[x].getAttribute("search") === "true") {
            for (let y = 0; y < data_tbody_td.length; y++) {
              const data_tbody_td_value =
                data_tbody_td[y].textContent.toUpperCase() ||
                data_tbody_td[y].innerText.toUpperCase(); // Value of EleTd
              if (data_tbody_td_value.indexOf(value_filter) == -1) {
                count++;
              }
            }
            if (count === data_tbody_td.length) {
              data_tbody_tr[x].style.display = "none";
              data_tbody_tr[x].setAttribute("search", "false");
            } else {
              data_tbody_tr[x].style.display = "";
              data_tbody_tr[x].setAttribute("search", "true");
              console.log(data_tbody_tr[x]);
            }
          }
        }
      });
    }
  }

  // Toggle Icon-filter
  for (let i = 0; i < data_icon_filter.length; i++) {
    const select_filter = e.getElementsByClassName("select-filter")[0];
    data_icon_filter[0].addEventListener("click", () => {
      data_icon_filter[0].style.display = "none";
      data_icon_filter[1].style.display = "block";
      data_icon_filter[1].parentNode.style.background = "var(--red-02)";
      select_filter.classList.add("show");
    });
    data_icon_filter[1].addEventListener("click", () => {
      data_icon_filter[1].style.display = "none";
      data_icon_filter[0].style.display = "block";
      data_icon_filter[0].parentNode.style.background = "var(--yellow-02)";
      select_filter.classList.remove("show");
    });
  }

  // Checkbox
  for (let i = 1; i < data_checkbox.length; i++) {
    data_checkbox[i].addEventListener("click", () => {
      if (data_checkbox[i].type === "checkbox") {
        if (data_checkbox[i].classList.contains("checkbox-all")) {
          for (let j = i + 1; j < data_checkbox.length; j++) {
            if (data_checkbox[i].checked === true) {
              data_checkbox[j].checked = true;
            }
            if (data_checkbox[i].checked === false) {
              data_checkbox[j].checked = false;
            }
          }
        }
      }
    });
  }

  // Typing Input Search
  data_search.addEventListener("keyup", () => {
    const data_search_value = data_search.value.toUpperCase(); // Value of Input Search
    for (let j = 0; j < data_tbody_tr.length; j++) {
      const data_tbody_td = data_tbody_tr[j].getElementsByTagName("td"); // eleTbodyTd
      var count = 0;
      for (let i = 0; i < data_tbody_td.length; i++) {
        const data_tbody_td_value =
          data_tbody_td[i].textContent.toUpperCase() ||
          data_tbody_td[i].innerText.toUpperCase(); // Value of EleTd
        if (data_tbody_td_value.indexOf(data_search_value) == -1) {
          count++;
        }
      }
      if (count === data_tbody_td.length) {
        data_tbody_tr[j].style.display = "none";
        data_tbody_tr[j].setAttribute("search", "false");
      } else {
        data_tbody_tr[j].style.display = "";
        data_tbody_tr[j].setAttribute("search", "true");
      }
    }
  });

  // Pagination
  const pa_btn_left = e.getElementsByClassName("icon-left")[0];
  const pa_btn_right = e.getElementsByClassName("icon-right")[0];
  var current_page = 1;
  var records_per_page = 3;

  const prevPage = () => {
    if (current_page > 1) {
      current_page--;
      changePage(current_page);
    }
  };

  const nextPage = () => {
    if (current_page < numPages()) {
      current_page++;
      changePage(current_page);
    }
  };

  const changePage = (page) => {
    if (page < 1) {
      page = 1;
    }
    if (page > numPages()) {
      page = numPages();
    }
    for (let j = 0; j < data_tbody_tr.length; j++) {
      data_tbody_tr[j].style.display = "none";
    }
    var max =
      page * records_per_page > data_tbody_tr.length
        ? data_tbody_tr.length
        : page * records_per_page;
    for (let i = (page - 1) * records_per_page; i < max; i++) {
      data_tbody_tr[i].style.display = "";
    }

    if (page == 1) {
      pa_btn_left.style.visibility = "hidden";
    } else {
      pa_btn_left.style.visibility = "visible";
    }

    if (page == numPages()) {
      pa_btn_right.style.visibility = "hidden";
    } else {
      pa_btn_right.style.visibility = "visible";
    }
  };

  const numPages = () => {
    return Math.ceil(data_tbody_tr.length / records_per_page);
  };

  for (let i = numPages(); i >= 1; i--) {
    pa_btn_left.insertAdjacentHTML(
      "afterend",
      `
      <a href="javascript:void(0)" class="page-item" value="${i}">
        <li class=" p3-medium-14">${i}</li>
      </a>
      `
    );
  }
  const page_item = e.getElementsByClassName("page-item");

  pa_btn_left.addEventListener("click", () => {
    prevPage();
    for (let i = 0; i < page_item.length; i++) {
      page_item[i].classList.remove("active");
    }
    page_item[current_page].classList.add("active");
  });
  pa_btn_right.addEventListener("click", () => {
    nextPage();
    for (let i = 0; i < page_item.length; i++) {
      page_item[i].classList.remove("active");
    }
    page_item[current_page].classList.add("active");
  });

  window.addEventListener("load", () => {
    changePage(1);
    page_item[current_page].classList.add("active");
  });
});

// Circle Progress
if (document.querySelector("body").contains(document.querySelector(".numb"))) {
  const numb = document.querySelector(".numb");
  let counter = 1.0;
  setInterval(() => {
    if (counter.toFixed(1) == 5.0) {
      clearInterval();
    } else {
      counter += 0.1;
      numb.textContent = counter.toFixed(1);
    }
  }, 200);
}
