import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

Alpine.plugin(intersect)
window.Alpine = Alpine
Alpine.start()


const swiper = new Swiper('#StatSlider', {
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})

const postSwiper = new Swiper(".post-slider", {
	loop: true,
	slidesPerView: 1,
	spaceBetween: 24,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
		768: {
			slidesPerView: 3,
			loop: false,
			autoHeight: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			pagination: false
		},
		1200: {
			slidesPerView: 4,
			loop: false,
			autoHeight: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			pagination: false
		}
	}
})

var callback = function(){
	const body = document.body
	const toggleMMB = document.getElementById('MobileMenuOpen')
	const mobileMenuOverlay = document.querySelector('.mobile-menu')
	const mobileMenuWrap = document.querySelector('.mobile-menu-wrap')

	if ( toggleMMB ) {
		toggleMMB.addEventListener( 'click', event => {
			body.classList.toggle('menu-open')
            toggleMMB.classList.toggle('menu-open')
			mobileMenuWrap.classList.toggle('block')
			mobileMenuWrap.classList.toggle('hidden')
			mobileMenuOverlay.classList.toggle('block')
			mobileMenuOverlay.classList.toggle('hidden')
		})
	}

	const mobileMenuSubMenuParents = document.querySelectorAll('.mobile-menu li.menu-item-has-children > a')

	if ( mobileMenuSubMenuParents ) {
		for ( let i = 0; i < mobileMenuSubMenuParents.length; i++ ) {
			mobileMenuSubMenuParents[i].addEventListener( 'click', event => {
				event.preventDefault()
				event.target.parentElement.classList.toggle('open')
			})
		}
	}

	const toggleTagList = document.getElementById('TagListToggle')
	const tagList = document.getElementById('ExtraTagList')

	if ( toggleTagList ) {
		toggleTagList.addEventListener( 'click', event => {
			event.preventDefault();
			tagList.classList.toggle('hidden')
		})
	}

	const mobileToggleTagList = document.getElementById('MobileTaglistToggle')
	const mobileTagListContainer = document.querySelector('.js-tag-list-container')

	if ( mobileToggleTagList ) {
		mobileToggleTagList.addEventListener( 'click', event => {
			event.preventDefault();
			mobileTagListContainer.classList.toggle('hidden')
			mobileTagListContainer.classList.toggle('block')
		})
	}
}

if (
    document.readyState === "complete" ||
    (document.readyState !== "loading" && !document.documentElement.doScroll)
) {
  callback();
} else {
  document.addEventListener("DOMContentLoaded", callback);
}

jQuery(document).ready(function($){

	//prevent clicking on nav menu headers that don't link to pages
	$('nav a[href="#"]').on('click', function(e) {
		e.preventDefault();
	});

	$('#CopyShare').on('click', function(e) {
		e.preventDefault();
		var url = $(this).attr('data-shareurl');
		var $shareInput = $('#CopyInput');
		$shareInput.toggleClass('hidden');
		$shareInput.val(url);
		$shareInput.select();
		document.execCommand("Copy");
	});

	$('.js-article').on('click', function(e) {
		var url = $(this).attr('data-url');

		window.location.href = url;
	});

});