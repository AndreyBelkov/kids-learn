/*$(function() {

	// Custom JS

});*/


//main-menu
let menu = document.querySelector('.menu__close');
let headerMobile = document.querySelector('.header__mobile');


menu.onclick = function() {
	menu.classList.toggle('menu__open');
	headerMobile.classList.toggle('header__mobile--open');	
}




//to-up
let toUps = document.querySelectorAll('.to-up');
for (let toUp of toUps) {
		toUp.onclick = function() {
		window.scrollTo(0,0);
	};
}
