jQuery(document).ready(function($){

    // Background image holder - Static hero with fullscreen autosize
    if ($('.spotlight').length) {
        $('.spotlight').each(function() {
            
            var $this = $(this);
            var holderHeight;

            if ($this.data('spotlight') == 'fullscreen') {
                if ($this.data('spotlight-offset')) {
                    var offsetHeight = $('body').find($this.data('spotlight-offset')).height();
                    holderHeight = $(window).height() - offsetHeight;
                }
                else {
                    holderHeight = $(window).height();
                }
  

                if ($(window).width() > 991) {
                    $this.find('.spotlight-holder').css({
                        'height': holderHeight + 'px'
                    });
                } 
                else {
                    $this.find('.spotlight-holder').css({
                        'height': 'auto'
                    });
                }
            }
        })
    }

    // Tooltips 

     $('[data-toggle="tooltip"]').tooltip();

     // Popover

      $('[data-toggle="popover"]').each(function() {
        var popoverClass = '';
        if($(this).data('color')) {
            popoverClass = 'popover-'+$(this).data('color');
        }
        $(this).popover({
            trigger: 'focus',
            template: '<div class="popover '+ popoverClass +'" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        })
    });
    



    });






