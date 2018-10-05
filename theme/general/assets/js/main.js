// JavaScript Document
$(function() {
    $('.menu').slicknav();

    $('.faq-list > li > a').click(function(event) {
        event.preventDefault();
        $(this).next('ul').slideToggle(500);
        $(this).toggleClass('activ');
    }).next('ul').hide();


     $('.menu > li').hover(function () {
         clearTimeout($.data(this,'timer'));
         $('ul',this).stop(true,true).slideDown(300);
      }, function () {
        $.data(this,'timer', setTimeout($.proxy(function() {
          $('ul',this).stop(true,true).slideUp(300);
        }, this), 100));
      });


});
//end read





$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 70 //offsets for fixed header
                }, 1000);
                return false;
            }
        }
    });
    //Executed on page load with URL containing an anchor tag.
    if($(location.href.split("#")[1])) {
        var target = $('#'+location.href.split("#")[1]);
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - 70 //offset height of header here too.
            }, 1000);
            return false;
        }
    }
});


