$(function() {



//main-menu
let menu = document.querySelector('.menu__close');
let headerMobile = document.querySelector('.header__mobile');


menu.onclick = function() {
	menu.classList.toggle('menu__open');
	headerMobile.classList.toggle('header__mobile--open');	
}


//open popup first
let FirstBtns = document.querySelectorAll('.first__btn');
let body = document.querySelector('body');
let popupFirst = document.querySelector('.popup--first');

for ( let FirstBtn of FirstBtns) {
		FirstBtn.onclick = function() {
		body.classList.add('no-scroll');
		popupFirst.classList.add('open');
	}
}


//open popup second
let SecondBtns = document.querySelectorAll('.second__btn');
let popupSecond = document.querySelector('.popup--second');

for (let SecondBtn of SecondBtns) {
		SecondBtn.onclick = function() {
		body.classList.add('no-scroll');
		popupSecond.classList.add('open');
	}
}


//close popup
let popupCloses = document.querySelectorAll('.popup__close');

for (let popupClose of popupCloses) {
	popupClose.onclick = function() {
	body.classList.remove('no-scroll');
	popupFirst.classList.remove('open');
	popupSecond.classList.remove('open');
}
}




//modal
let programTourism = document.querySelector('.program-tourism');
let programPr = document.querySelector('.program-pr');
let programDesign = document.querySelector('.program-design');
let modalTourism = document.querySelector('.modal-tourism');
let modalPr = document.querySelector('.modal-pr');
let modalDesign = document.querySelector('.modal-design');
let modalCloses = document.querySelectorAll('.modal__close');
let modalBtns = document.querySelectorAll('.modal__btn');

programTourism.onclick = function() {
	modalTourism.classList.add('open');
	body.classList.add('no-scroll');
}
programPr.onclick = function() {
	modalPr.classList.add('open');
	body.classList.add('no-scroll');
}
programDesign.onclick = function() {
	modalDesign.classList.add('open');
	body.classList.add('no-scroll');
}

for (let modalClose of modalCloses) {
	modalClose.onclick = function() {
	modalTourism.classList.remove('open');
	modalPr.classList.remove('open');
	modalDesign.classList.remove('open');
	body.classList.remove('no-scroll');
	};
};

for (let modalBtn of modalBtns) {
	modalBtn.onclick = function() {
	modalTourism.classList.remove('open');
	modalPr.classList.remove('open');
	modalDesign.classList.remove('open');
	popupFirst.classList.add('open');
	};
};



//to-up
let toUps = document.querySelectorAll('.to-up');
for (let toUp of toUps) {
		toUp.onclick = function() {
		window.scrollTo(0,0);
	};
}


//scroll
let dataScrolls = document.querySelectorAll('[data-scroll]')	
for (let dataScroll of dataScrolls) {
	dataScroll.addEventListener('click', function(evt) {
		evt.preventDefault();
		let dataID = dataScroll.getAttribute('data-scroll');
		document.querySelector(dataID).scrollIntoView();
		headerMobile.classList.remove('header__mobile--open');
		menu.classList.remove('menu__open');
	})
};

//slider
$('.survey__form').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: '<button type="button" class="slick-prev">&larr; Назад</button>',
	nextArrow: '<button type="button" class="slick-next">Вперед &rarr;</button>',
	infinite: false,
	adaptiveHeight: true,
	swipe: false,
	draggable: false,
	speed: 0,
});





});