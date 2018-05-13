var exampleSlider;
$(document).ready(function(){
    if($('#pagination').length>0){
    $('#pagination').twbsPagination({
          totalPages: totalpages,
          visiblePages: 5,
          startPage: currentpage,
          onPageClick: function (event, page) {
            console.log(event)
            if(currentpage!=page){
               window.top.location = "?page="+page;
             }
          }
      });
  }

   if($('.home_sidebanner.youtubelinklist.swiper-container').length>0){
var mySwiper = new Swiper('.home_sidebanner.youtubelinklist.swiper-container', {
  autoplay: {
    delay: 3000,
  },
   speed: 500,
  loop: true,
  pagination: {
    el: '.home_sidebanner.youtubelinklist .swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  nextButton: '.home_sidebanner.youtubelinklist .s-button-next',
  prevButton: '.home_sidebanner.youtubelinklist .s-button-prev',
});


}
   if($('.home_sidebanner.homestaticbanner.swiper-container').length>0){
var mySwiper = new Swiper('.home_sidebanner.homestaticbanner.swiper-container', {
  autoplay: {
    delay: 2000,
  },
   speed: 500,
  loop: true,
  pagination: {
    el: '.home_sidebanner.homestaticbanner .swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  nextButton: '.home_sidebanner.homestaticbanner .s-button-next',
  prevButton: '.home_sidebanner.homestaticbanner .s-button-prev',
});


}
   if($('#home .swiper-container').length>0){
var mySwiper = new Swiper('#home .swiper-container', {
  autoplay: true,
   speed: 400,
  loop: true,
  pagination: {
    el: '#home .swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  nextButton: $('#home .s-button-next'),
  prevButton: $('#home .s-button-prev'),
});
$("#home .s-button-next").click(function(){
mySwiper.slideNext();
});
$("#home .s-button-prev").click(function(){
mySwiper.slidePrev();
});

}

 

 exampleSlider = $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    after:function(slider){
      $(".slider-content").removeClass("active")
      $(".slider-content.con-"+slider.currentSlide).addClass("active");
    }
  });

$("#carousel .slider-content").click(function(){
  var exampleSlider = $('#slider').data('flexslider');
exampleSlider.flexAnimate(parseInt($(this).attr("slideno")));
})
$(".youtubelink").mouseenter(function(){
    
    console.log(($(".lity-youtube").length<=0));
    if($(".lity-youtube").length<=0){
      //$(this).trigger("click");
      console.log("TEST");
    }
    
  })
/*
         * Bind custom select
         */
        /*$('select.custom-select').each(function(){
            var $element = $(this),
                extraOptions = {
                    dropdownCssClass: '',
                    containerCssClass: ''
                }

            // Prevent duplicate loading
            if ($element.data('select2') != null) {
                return true; // Continue
            }

            $element.attr('data-disposable', 'data-disposable')
            $element.one('dispose-control', function(){
                if ($element.data('select2')) {
                    $element.select2('destroy')
                }
            })

            if ($element.hasClass('select-no-search')) {
                extraOptions.minimumResultsForSearch = Infinity
            }
            if ($element.hasClass('select-no-dropdown')) {
                extraOptions.dropdownCssClass += ' select-no-dropdown'
                extraOptions.containerCssClass += ' select-no-dropdown'
            }

            if ($element.hasClass('select-hide-selected')) {
                extraOptions.dropdownCssClass += ' select-hide-selected'
            }

            var source = $element.data('handler');
            if (source) {
                extraOptions.ajax = {
                    transport: function(params, success, failure) {
                        var $request = $element.request(source, {
                            data: params.data
                        })

                        $request.done(success)
                        $request.fail(failure)

                        return $request
                    },

                    dataType: 'json'
                }
            }

            var separators = $element.data('token-separators')
            if (separators) {
                extraOptions.tags = true
                extraOptions.tokenSeparators = separators.split('|')

                if ($element.hasClass('select-no-dropdown')) {
                    extraOptions.selectOnClose = true
                    extraOptions.closeOnSelect = false

                    $element.on('select2:closing', function() {
                        $('.select2-dropdown.select-no-dropdown:first .select2-results__option--highlighted').removeClass('select2-results__option--highlighted')
                        $('.select2-dropdown.select-no-dropdown:first .select2-results__option:first').addClass('select2-results__option--highlighted')
                    })
                }
            }

            var placeholder = $element.data('placeholder')
            if (placeholder) {
                extraOptions.placeholder = placeholder
            }

            $element.select2($.extend({}, selectOptions, extraOptions))
        })*/
  })