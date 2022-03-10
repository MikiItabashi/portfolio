"use strict";

jQuery(function ($) {
  $('.drawer-icon').on('click', function (e) {
    e.preventDefault();
    $('.drawer-icon').toggleClass('is-active');
    $('.drawer-content').toggleClass('is-active');
    $('.drawer-background').toggleClass('is-active');
    $('.header').toggleClass('is-active');
    return false;
  });
  $('.drawer-content__item').on('click', function (e) {
    $('.drawer-icon').trigger('click');
  });
});