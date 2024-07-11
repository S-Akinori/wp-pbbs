import $ from './jquery'
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';
import { fadeIn } from './modules/fadeIn';

const swiper = new Swiper('.swiper', {
  spaceBetween: 30,
  centeredSlides: true,
  effect: "fade",
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

$(function() {
  fadeIn();
  $('.js-menu-toggler').on('click', function() {
    $('.sp-menu-container').toggleClass('active');
  })

  $('.sp-menu-container .menu a').addClass('js-scroll-trigger');

  $('.js-scroll-trigger').on('click', function() {
    $('.sp-menu-container').toggleClass('active');
  })    

  $('.js-lineup-toggler').on('click', function() {
    const id = $(this).data('id');
    const targetId = $(this).attr('id').replace('Button', '');
    $()
    $('.js-lineup-target').hide();
    $(`#${targetId}`).fadeIn();
  })
})