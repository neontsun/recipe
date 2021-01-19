"use strict";

// Плавное открывание фильтра
const acc = document.getElementsByClassName("filters__accordion");
for (let i = 0; i < acc.length; ++i) {

	acc[i].addEventListener("click", () => {

		let panel = acc[i].nextElementSibling;

		if (panel.style.maxHeight) panel.style.maxHeight = null;
		else panel.style.maxHeight = panel.scrollHeight + "px";

	});

}

// Построение документа
window.addEventListener("DOMContentLoaded", () => {

	const params = getParams();
	const tempArr = [];
	const checkboxArr = document.querySelectorAll(".filters__checkbox");
	const searchText = document.querySelector(".search__input");
	
	if (params.length > 0) {

		let selectedFilters = document.querySelector(".selected-filters");
		let selectedCount = document.querySelector(".selected-filters__count");

		selectedCount.innerText = params.length;
		selectedFilters.classList.toggle("selected-filters_visible");

	}	

	for (let i = 0; i < params.length; i++) {

		if (params[i][0] == "title" || params[i][0] == "sorting") {

			tempArr.push([params[i][0], params[i][1]]);
			params.splice(i, 1);

		}

	}

	for (let i = 0; i < params.length; ++i) {

		const val = decodeURI(params[i][1]);

		for (let i = 0; i < checkboxArr.length; ++i) {

			const checkboxVal = checkboxArr[i].nextElementSibling.innerText;
			
			if (checkboxVal == val) checkboxArr[i].checked = 1;

		}

	}

	for (let i = 0; i < tempArr.length; ++i) {

		if (tempArr[i][0] == "title")
			searchText.value = tempArr[i][1];
		
		if (tempArr[i][0] == "sorting") {

			const filterBtn = document.querySelector(".search__btn-text");
			const filterLink = document.querySelectorAll(".filter-modal__link");

			filterBtn.innerText = decodeURI(tempArr[i][1]);

			for (let k = 0; k < filterLink.length; ++k) {

				if (filterLink[k].innerText == decodeURI(tempArr[i][1])) {

					filterLink[k].classList.remove("filter-modal__link_active");
					filterLink[k].classList.toggle("filter-modal__link_active");

				}
				else
					filterLink[k].classList.remove("filter-modal__link_active");

			}

		}

	}

});

// При изменении размера документа
window.addEventListener("resize", () => {

	const filterBtn = document.querySelector(".search__btn-icon-img");
	let coordBtn = filterBtn.getBoundingClientRect();
	let filterModal = document.querySelector(".filter-modal");
	const clientWidth = document.documentElement.clientWidth;


	if (clientWidth < 767)
		filterModal.style.left = (clientWidth / 2) - (filterModal.clientWidth / 2) + "px";
	else
		filterModal.style.left = coordBtn.right - filterModal.clientWidth + "px";
		
	filterModal.style.top = coordBtn.bottom + pageYOffset + 5 + "px";

});

// Клик по кнопке очистки фильтров
const clearFilter = document.querySelector(".selected-filters__btn");
clearFilter.addEventListener("click", () => {

	window.location.href = "/";

});

// Клик по кнопке поиска
const searchBtn = document.querySelector(".search__form-icon"); 
searchBtn.addEventListener("click", () => {

	let params = getParams();
	let searchText = searchBtn.nextElementSibling.value;
	let isFind = false;

	if (params.length != 0) {

		for (let i = 0; i < params.length; ++i) {

			if (params[i][0] == "title") {

				if (searchText == "") params.splice(i, 1);
				else params[i][1] = searchText;

				isFind = true;

			}

		}

		if (!isFind)
			params.push(["title", searchText]);

	}
	else {

		if (searchText != "")
			params.push(["title", searchText]);

	}

	window.location.href = buildUrl(params);
	
});

// Клик по чекбоксам
const checkboxArr = document.querySelectorAll(".filters__checkbox");
for (let i = 0; i < checkboxArr.length; ++i) {

	let params = getParams();
	let temp = [];

	checkboxArr[i].addEventListener("click", () => {

		for (let i = 0; i < params.length; i++) {

			if (params[i][0] == "title" || params[i][0] == "sorting") {

				temp.push([params[i][0], params[i][1]]);

			}

		}

		params = [];

		for (let k = 0; k < checkboxArr.length; ++k) {

			let str = "";
			let text = checkboxArr[k].nextElementSibling.innerText;

			switch (true) {

				case (k < 14): str = "tag%5Bcategory%5D%5B%5D"; break;
				case (k < 18): str = "tag%5Btime%5D%5B%5D"; break;
				case (k < 22): str = "tag%5Beating%5D%5B%5D"; break;
				case (k < 26): str = "tag%5Bholiday%5D%5B%5D"; break;

			}

			if (checkboxArr[k].checked) {

				params.push([str, encodeURI(text)]);

			}

		}

		params = params.concat(temp);
		
		window.location.href = buildUrl(params);

	});

}

// Клик по кнопке сортировки
const filterBtn = document.querySelector(".search__list-btn");
filterBtn.addEventListener("click", () => {

	const filterBtn = document.querySelector(".search__btn-icon-img");
	let coordBtn = filterBtn.getBoundingClientRect();
	let filterModal = document.querySelector(".filter-modal");
	const clientWidth = document.documentElement.clientWidth;

	if (filterModal.classList.length == 2) {

		filterModal.style.left = 0 + "px";
		filterModal.style.top = 0 + "px";

	}
	else {

		if (clientWidth < 767)
			filterModal.style.left = (clientWidth / 2) - (filterModal.clientWidth / 2) + "px";
		else
			filterModal.style.left = coordBtn.right - filterModal.clientWidth + "px";

		filterModal.style.top = coordBtn.bottom + pageYOffset + 5 + "px";

	}

	filterModal.classList.toggle("filter-modal_visible");

});

// Клик по элементам сортировки
const filterLink = document.querySelectorAll(".filter-modal__link");
for (let i = 0; i < filterLink.length; ++i) {

	filterLink[i].addEventListener("click", () => {

		const linkText = filterLink[i].innerText;
		let params = getParams();
		let isFind = false;
		
		if (params.length == 0) {

			params.push(["sorting", linkText]);

			window.location.href = buildUrl(params);

		}
		
		for (let k = 0; k < params.length; ++k) {

			if (params[k][0] == "sorting") {

				params[k][1] = linkText;
				isFind = true;

			}

		}

		if (!isFind) {

			params.push(["sorting", linkText]);

		}

		window.location.href = buildUrl(params);

	});

}

// Получение параметров
function getParams() {

	const url = window.location.search.slice(1);

	if (!url) return [];

	const arr = url.split("&");
	let params = [];

	for (let i = 0; i < arr.length; ++i) {

		params.push(arr[i].split("="));

	}

	return params;

}

// Построение ссылки
function buildUrl(params) {

	let str = "?";

	if (params.length != 0) {

		params.forEach(elem => {
		
			str += elem[0] + "=" + elem[1] + "&";

		});

	}
	
	str = str.substring(0, str.length - 1);

	return str == "" ? "/" : str;

}
