
(function($) {	
    $(document).ready(function(){
        if( screen.width >= 800 ) /* desktop */ { 
            if( $('body.home').length ){
                    center_frontpage();
                    $(window).resize(function(){
                        center_frontpage();
                });
            }
         } else /* mobile */ {
             $('#more').css({marginTop:'50%'});
            $('.video-list').slideUp();
         }
        
        $('.more-anchor').on('click',function(){
            $('html, body').animate({
                scrollTop: $("#more").offset().top
            }, 1000);
        });
        if($('.member-form').length){
            var height = '100%';
            $('.wrapper').css({height:height});
            $('.wrapper .container').css({height:height});
            $('.member-form').css({height:height});
        }
        $('body').on('click','.fa-bars',function(){
            $('nav.nav').toggleClass('show');
            $(this).removeClass('fa-bars').addClass('fa-times').css({'margin-right':$('nav.nav').width() + 'px'});
        });
        $('body').on('click','.fa-times',function(){
            $('nav.nav').toggleClass('show');
            $(this).removeClass('fa-times').addClass('fa-bars').css({'margin-right':0});
        });
        $('.toggle-categories').on('click',function(e){
            e.preventDefault();
            $('.video-list').slideToggle();
            $(this).find('i').toggleClass('fa-chevron-down').toggleClass('fa-chevron-up');
        })
    });

    function center_frontpage(){
        var rem = parseFloat(getComputedStyle(document.documentElement).fontSize)
        var wrapper_pad = 2*rem;
        var intro_height = $('h1').height() + $('h1 + p').height();
        $('h1').css({marginTop: ((window.innerHeight - $('.masthead').height()) / 2) - wrapper_pad - (intro_height/2) + 'px'});

        $('#more').css({marginTop:window.innerHeight/2 - intro_height - (2*rem) + 'px'})
    }
})( jQuery );