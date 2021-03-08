


$(function () {

  // Scroll To top   
  $('.movetotop').click(function() {
    $('html, body').animate({scrollTop: 0}, 700);
    return false;
  });    

  // SITENAME colored 
  $(".slider-wrap .carousel-caption h1").lettering("words"); 

  // Initate masonry grid
  var $grid = $('.gallery-wrapper').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });

  // Initate imagesLoaded
  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
  });
  
  /* matchHeigh */
  // apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)
  
  // media query event handler
  if (matchMedia) {
    var mq = window.matchMedia("(min-width: 992px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
  }

  // apply matchHeight to each item container's items
  // media query change
  function WidthChange(mq) {
    if (mq.matches) {
      $('#home-section-4 .home-section-4-menu > .row').each(function() {
        $(this).children('div[class*="col-"]').find('.matchHeigh').matchHeight({
          target: $('.home-section-4-menu-body')   
        });
      });
      $('#home-section-6 .homepage-latestnews > .row').each(function() {
        $(this).children('div[class*="col-"]').find('.matchHeigh').matchHeight({
          byRow: true   
        });
      });
    }
  }
  
  //------------- FEATURED CAROUSEL -------------
  // combine animate with jQuery or add your own CSS rules
  $('.slider-wrap .carousel-caption').addClass('animated fadeInUp'); 
  
  
  //------------- AOS ANIMATE -------------
  AOS.init({ 
    duration: 1500, 
    disable: 'mobile'
  });

   // AOS.init({
   //    offset: 200,
   //    duration: 600,
   //    easing: 'ease-in-sine',
   //    delay: 100,
   //  }); 


  // add wrap span to the featurebox-button
  $(".slider-wrap a.btn-featurebox").wrapInner("<span></span>");
  // add wrap span to the home-section-1-menu-button
  $(".home-section-1-menu-button a").wrapInner("<span></span>");
  // add wrap span to the home-section-2-menu-button
  $(".home-section-2-menu-button a").wrapInner("<span></span>");
  // add wrap span to the home-section-4-menu-button
  $(".home-section-4-menu-button a").wrapInner("<span></span>");
  // add wrap span to the news-list-item-morebutton
  $(".news-list-item .news-list-item-morebutton a").wrapInner("<span></span>");
 
  
  // Forum Stats make responsive *************************************************
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
  
  
  //------------- DROPDOWN MENU FROM RIGHT -------------
  // combine animate with jQuery or add your own CSS rules
  $('#forum-viewforum .forum-viewforum-button ul.dropdown-menu').addClass('dropdown-menu-right'); 
  $('#forum-view-topic .forum-viewtopic-button ul.dropdown-menu').addClass('dropdown-menu-right'); 
  $('#forum-view-topic .forum-viewtopic-postoptions ul.dropdown-menu').addClass('dropdown-menu-right'); 
  
  
  // ------------------------------------------------------- //
  // Multi Level dropdowns for main menu
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  }); 
  
  //------------- Opening hours style lettering.js -------------  
  $(".opening-hours-content .contact-info-hours").lettering('lines');
    
});