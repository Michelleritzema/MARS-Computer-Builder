$(document).ready(function() {
    $('.intro_arrow').addClass('arrow_down');
    function close_accordion_section() {
        $('.intro_accordion .accordion-section-title').removeClass('active');
        $('.intro_accordion .accordion-section-content').slideUp(300).removeClass('open');
        $('.intro_arrow').removeClass('arrow_up');
        $('.intro_arrow').addClass('arrow_down');
    }
 
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        //var currentAttrValue = $(this).attr('href');
        if($('.accordion-section-title').is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $('.accordion-section-title').addClass('active');
            // Open up the hidden content panel
            $('.intro_accordion #accordion-1').slideDown(300).addClass('open');
            $('.intro_arrow').removeClass('arrow_down');
            $('.intro_arrow').addClass('arrow_up');
        }
 
        e.preventDefault();
    });
});