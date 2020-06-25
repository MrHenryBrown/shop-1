"use strict";

let burger_osn = document.getElementById('b1');
burger_osn.addEventListener('click', emersion_menu);
let filter = document.getElementsByClassName('filter_min_box')[0];
filter.addEventListener('click', emersion_filter);
let sort = document.getElementsByClassName('filter_min_box')[1];
sort.addEventListener('click', emersion_sort);
let sort_open = document.getElementsByClassName('sort_open_container')[0];
let filter_open = document.getElementsByClassName('filter_open_container')[0];

function emersion_menu() {
	let title_filter = document.getElementById('filter');
	let title_sort = document.getElementById('sort');
	let burger_title = document.getElementById('burger_title');
	let open_menu = document.getElementById('open_menu');
	if (open_menu.style.opacity == '0' || !open_menu.style.opacity ) {
		setTimeout( () => {sort_open.style.display = 'none';sort_open.style.opacity = '0';},400);
		setTimeout( () => {filter_open.style.display = 'none';filter_open.style.opacity = '0';},400);
		setTimeout(() => open_menu.style.opacity = '1',80);
		open_menu.style.display = 'block';
		burger_title.textContent = 'Закрыть';
		setTimeout( () => title_filter.textContent = 'Фильтры', 400);
		setTimeout( () => title_sort.textContent = 'Сортировать', 400);
	} else {
		open_menu.style.opacity = '0';
		setTimeout(() => open_menu.style.display = 'none', 400);
		burger_title.textContent = 'Каталог';
	}

}

function emersion_filter() {
	let title = document.getElementById('filter');
	if(filter_open.style.opacity == '0' || !filter_open.style.opacity){
		sort_open.style.display = 'none';
		sort_open.style.opacity = '0';
		setTimeout(() => filter_open.style.opacity = '1',80);
		filter_open.style.display = 'block';
		title.textContent = 'Сохранить параметры';
	} else {
		filter_open.style.opacity = '0';
		setTimeout(() => filter_open.style.display = 'none', 400);
		title.textContent = 'Фильтры';
	}
}

function emersion_sort() {
	let title = document.getElementById('sort');
	if(sort_open.style.opacity == '0' || !sort_open.style.opacity){
		filter_open.style.display = 'none';
		filter_open.style.opacity = '0';
		setTimeout(() => sort_open.style.opacity = '1',80);
		sort_open.style.display = 'block';
		title.textContent = 'Сохранить параметры';
	} else {
		sort_open.style.opacity = '0';
		setTimeout(() => sort_open.style.display = 'none', 400);
		title.textContent = 'Сортировать';
	}
}
