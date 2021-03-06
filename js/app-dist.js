"use strict";function _classCallCheck(t,a){if(!(t instanceof a))throw new TypeError("Cannot call a class as a function")}var Marquee=function t(a){_classCallCheck(this,t),a.marquee({duration:15e3,gap:5,delayBeforeStart:0,direction:"left",duplicated:!0})},Nav=function t(a,e){var s=this;_classCallCheck(this,t),this.toggleNav=function(){s._$btn.toggleClass(s._originalBtnClass+"--active"),s._$backdrop.toggleClass("backdrop--active"),s._$nav.toggleClass(s._originalNavClass+"--active")},this._$btn=a,this._originalBtnClass=this._$btn.attr("class"),this._$backdrop=$(".backdrop"),this._$nav=e,this._originalNavClass=this._$nav.attr("class"),this._$btn.click(this.toggleNav),this._$backdrop.click(this.toggleNav)},ScrollManager=function t(){_classCallCheck(this,t),this.scroll=function(t){var a=$(t.currentTarget).attr("data-scroll-to"),e=$('[data-scroll-target="'+a+'"]');$.scrollTo(e,500)},this._$trigger=$("[data-scroll-to]"),this._$trigger.click(this.scroll)},Competencias=function t(){_classCallCheck(this,t),this.slider=$(".competencias__gallery-slider"),this.slider.slick({mobileFirst:!0,slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!0,adaptiveHeight:!0,autoplay:!0,autoplaySpeed:2e3,customPaging:function(){return""},responsive:[{breakpoint:768,settings:{slidesToScroll:1,slidesToShow:2}},{breakpoint:992,settings:{slidesToScroll:1,slidesToShow:3}}]})},Tabs=function t(){var r=this;_classCallCheck(this,t),this.changeContent=function(t){var a=$(t.currentTarget);r.control.removeClass("navigation__item--active"),a.addClass("navigation__item--active");var e=a.attr("data-tab-show"),s=$('[data-tab-target="'+e+'"]');r.contentItem.removeClass("tabs__content-item--active"),s.addClass("tabs__content-item--active")},this.control=$("[data-tab-show]"),this.contentItem=$("[data-tab-target]"),this.control.click(this.changeContent)},Toggle=function t(){var s=this;_classCallCheck(this,t),this._$trigger=$("[data-toggle]"),this._$triggerIcon=this._$trigger.children(".toggle__trigger-icon"),this._plusIconSrc=this._$triggerIcon.attr("src"),this._minusIconSrc="images/i-menos-primary.svg",this._$trigger.click(function(t){var a=$(t.currentTarget);s._$triggerIcon.attr("src")===s._plusIconSrc?s._$triggerIcon.attr("src",s._minusIconSrc):s._$triggerIcon.attr("src",s._plusIconSrc);var e=a.attr("data-toggle");$('[data-toggle-target="'+e+'"]').slideToggle()})},InputNumber=function t(){_classCallCheck(this,t),this.updateVal=function(t){var a=$(t.currentTarget),e=a.attr("class").split("--")[1],s=a.parent(".form__input-controls").siblings("input"),r=s.val();"add"===e?r++:r<=s.attr("min")?r=s.attr("min"):r--,s.val(r)},this._$btn=$(".form__input-control"),this._$btn.click(this.updateVal)};$(window).load(function(){$("body").addClass("loading--finished"),0<$(".galeria").length&&$(".galeria__grid").masonry()}),$(document).ready(function(){(new WOW).init();new Nav($(".header__toggle"),$(".nav")),new ScrollManager;if(0<$(".competencias").length)new Competencias;if(0<$(".galeria").length&&($(".galeria__grid").masonry(),$(".galeria__videos").slick({mobileFirst:!0,slidesToShow:1,slidesToScroll:1,centerMode:!0,centerPadding:"5rem",arrows:!1,dots:!0,customPaging:function(){return""},responsive:[{breakpoint:768,settings:{centerPadding:"10rem"}},{breakpoint:992,settings:{centerPadding:"20rem"}},{breakpoint:1200,settings:{centerPadding:"30rem"}}]})),0<$(".tabs").length)new Tabs;if(0<$(".toggle").length)new Toggle;if(0<$(".form__input--number").length)new InputNumber;0<$(".scroll-stick").length&&$(".scroll-stick").scrollToFixed({minWidth:768}),0<$(".banner__slider").length&&$(".banner__slider-list").slick({slidesToScroll:1,slidesToShow:1,dots:!0,arrows:!0,prevArrow:"<img src='images/slider-arrow.svg' class='banner__slider-arrow banner__slider-arrow--prev'>",nextArrow:"<img src='images/slider-arrow.svg' class='banner__slider-arrow banner__slider-arrow--next'>",appendDots:$(".banner"),customPaging:function(){return""},appendArrows:$(".banner__cta-wrapper"),autoplay:!0,autoplaySpeed:5e3,fade:!0})});
//# sourceMappingURL=app-dist.js.map