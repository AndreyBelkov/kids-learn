/*$(function() {

	// Custom JS

});*/



let menu = document.querySelector('.menu__close');
let headerMobile = document.querySelector('.header__mobile');


menu.onclick = function() {
	menu.classList.toggle('menu__open');
	headerMobile.classList.toggle('header__mobile--open');	
}



let IntroBtn = document.querySelector('.intro__btn');
let body = document.querySelector('body');
let popup = document.querySelector('.popup');

IntroBtn.onclick = function() {
	body.classList.add('no-scroll');
	popup.classList.add('open');
}


let popupClose = document.querySelector('.popup__close');

popupClose.onclick = function() {
	body.classList.remove('no-scroll');
	popup.classList.remove('open');
}



let programTourism = document.querySelector('.program-tourism');
let programPr = document.querySelector('.program-pr');
let programDesign = document.querySelector('.program-design');
let modalTourism = document.querySelector('.modal-tourism');
let modalPr = document.querySelector('.modal-pr');
let modalDesign = document.querySelector('.modal-design');
let modalCloses = document.querySelectorAll('.modal__close');

programTourism.onclick = function() {
	modalTourism.classList.add('open');
}
programPr.onclick = function() {
	modalPr.classList.add('open');
}
programDesign.onclick = function() {
	modalDesign.classList.add('open');
}

for (let modalClose of modalCloses) {
	modalClose.onclick = function() {
	modalTourism.classList.remove('open');
	modalPr.classList.remove('open');
	modalDesign.classList.remove('open');
	console.log('jhsdfhjks');
	};
};

