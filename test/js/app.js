if($('.touch').length>0)
{
    if($('.show-main').length>0)
    {
        window.location.href = "../m/comments";
    }
    else
    {
        window.location.href = "m/";
    }

    if(navigator.userAgent.match(/iPad/i) == null)
    {

    }
}
if (jQuery.browser.version == 8.0 || jQuery.browser.version == 7.0 ) {
    $('#show-1 .show-box').attr({
        "data-animate":"left:0","data-delay":"0", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-2 .show-box').attr({
        "data-animate":"left:0","data-delay":"200", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-3 .show-box').attr({
        "data-animate":"left:0","data-delay":"800", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-4 .show-box').attr({
        "data-animate":"left:0","data-delay":"600", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-5 .show-box').attr({
        "data-animate":"left:0","data-delay":"400", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-6 .show-box').attr({
        "data-animate":"left:0","data-delay":"1000", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-7 .show-box').attr({
        "data-animate":"left:0","data-delay":"1200", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-8 .show-box').attr({
        "data-animate":"left:0","data-delay":"1400", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-9 .show-box').attr({
        "data-animate":"left:0","data-delay":"1600", "data-time":"400", "data-easing":"easeOutQuad"
    });

    $('#show-1 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"400", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-2 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"600", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-3 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"1200", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-4 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"1000", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-5 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"800", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-6 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"1400", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-7 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"1600", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-8 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"1800", "data-time":"400", "data-easing":"easeOutQuad"
    });
    $('#show-9 .show-text-box').attr({
        "data-animate":"filter: alpha(opacity=1)","data-delay":"2000", "data-time":"400", "data-easing":"easeOutQuad"
    });

}


jQuery.easing.easeInOutBackLight = function (x, t, b, c, d , s) {
    if (s == undefined) s = 1.70158;
    if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
    return Math.pow( c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b , 0.2);
}


!!(function($) {

    var option = {
        onLoading  : function () {

        },
        deepSearch : true,
        minimumTime: 500,
        onComplete : function () {
        }
    }

    var imageCache = {};
    var imageCounter = 0;
    var imageLoadedNum = 0;
    var startTime = 0;
    var imgLoadFinished = function(){
        imageLoadedNum++;
        // show loading status
        option.onLoading( ~~ ( imageLoadedNum / imageCounter * 100 ) );
        if( imageLoadedNum == imageCounter ){
            var dur = new Date() - startTime;
            // complete all iamges
            dur > option.minimumTime ? option.onComplete() :
                setTimeout( function(){ option.onComplete() } , option.minimumTime - dur );
        }
    }
    var addImageForPreload = function( url ) {
        var image = $("<img />")
            .load( imgLoadFinished )
            ["error"]( imgLoadFinished )
            .attr( "src", url );
    };
    var findImageInElement = function (element) {
        var $el = $(element);

        if( $el.closest('.noload').length ) return;
        var url ;
        var bg = $el.css("background-image");
        var src = $el.attr('src');
        var match = null;
        if( bg != "none" ){
            bg = $.trim( bg );
            match = bg.match(/^url\((['"])([^'"]+)\1\)/);
            url = match ? match[2] : null;
        } else if ( src && element.nodeName.toLowerCase() == "img" ) {
            url = src;
        }

        if( url && !imageCache[ url ] ){
            imageCounter++;
            imageCache[ url ] = url + ( $.browser.msie && $.browser.version < 9 ? "?" + (+ new Date()) : '' );
        }
    }



    $.fn.queryLoader2 = function( opt ) {
        $.extend( option , opt || {} );

        imageLoadedNum = 0;

        this.each(function() {
            findImageInElement(this);
            if ( option.deepSearch == true ) {
                $(this).find("*:not(script)").each(function() {
                    findImageInElement(this);
                });
            }
        });

        // set start time
        startTime = + new Date();
        // preload image
        for (var url in imageCache ) {
            addImageForPreload( imageCache[url] );
        }

        return this;
    };

})(jQuery);




var animation_begins = {
    "resize-win":  function(){
        $(window).trigger('resize');
    },
    "show-sina": function(){
        this.show();
    }
}

var isUglyIe = $.browser.msie && $.browser.version <= 8;
var isMostUglyIe = $.browser.msie && $.browser.version <= 6 ;
// query loading
var loadComplete = function(){
    var fixShowPageLi = function(){

        // init show-text-box scroll
//        $('.girl-desc').bind('mousewheel', function(event, delta, deltaX, deltaY) {
//            var $wrap = $(this);
//            $wrap.scrollTop( $wrap .scrollTop() - 20 * delta );
//            return false;
//        });
        
        if( isUglyIe ) return;
        // init right pink bar ,and left green bar
        var $rightPink = $('.right-pink');
        var $leftGreen = $('.left-green-inner');
        var $bottonProduct = $('.product-bottom div');
        var detectTops = [{
            animate: function( top ){
                if( $rightPink.attr('init') )
                    return;
                if( top > $rightPink.offset().top ){
                    $rightPink.animate({
                        marginLeft: -5
                    } , 1000 )
                    .attr('init' , 1);
                }
            }
        } , {
            animate: function( top ){
                if( $leftGreen.attr('init') )
                    return;
                if( top > $leftGreen.offset().top ){
                    $leftGreen.animate({
                        width: "100%"
                    } , 1000 )
                    .attr('init' , 1);
                }
            }
        } , {
            animate: function( top ){
                if( $bottonProduct.attr('init') )
                    return;
                if( top > $bottonProduct.parent().offset().top ){
                    setTimeout(function(){
                        $bottonProduct
                            .fadeIn(1000)
                    } , 500);
                    $bottonProduct
                    .attr('init' , 1);
                }
            }
        }];

        if($('.show-main').length>0)
        {
            $(window).scroll(function(){
                var top = $(this).scrollTop();
                var height = $(this).height();
                $.each(detectTops , function(i , obj){
                    obj.animate( top + height );
                });
            });
        }

        // for animate
        $('.show-box,.center-green').each(function( i ){
            var $t = $(this);
            var width = $t.hasClass('center-green') ? 170 : 310;
            var height = $t.hasClass('center-green') ? 115 : 245;
            setTimeout(function(){
                $t.show();
            } , i * 400 );
            $(this).delay( i * 400 ).animate({
                width: width
            } , 500 , function(){
                $(this).animate({
                    height: height,
                    left: 0
                } , 500 , function(){
                    // show content 
                    $(this).find('.girl-photo')
                        .add($(this).next())
                        .fadeIn();
                });
            })
        });
    }
    $('.loading').fadeOut(function(){
        fixShowPageLi();
        /* for animation */
        var ANIMATE_NAME = "data-animate";
        $('[' + ANIMATE_NAME + ']')
            .each(function(){
                var $dom = $(this);
                var tar = $dom.data('animate');
                var time = parseInt( $dom.data('time') );
                var delay = $dom.data('delay') || 0;
                var easing = $dom.data('easing');
                var begin = $dom.data('begin');
                tar = tar.split(';');
                var tarCss = {} , tmp;
                for (var i = tar.length - 1; i >= 0; i--) {
                    tmp = tar[i].split(':');
                    if( tmp.length == 2 )
                        tarCss[ tmp[0] ] = $.trim(tmp[1]);
                }
                if( isUglyIe && tarCss.opacity !== undefined ){
                    delete tarCss.opacity;
                }
                $dom.delay( delay )
                    .animate( tarCss , time , easing );
                if( begin ){
                    setTimeout(function(){
                        animation_begins[begin].call( $dom );
                    } , delay);
                }
            });
        if( !isMostUglyIe ){
            // init skrollr
            setTimeout(function(){
                skrollr.init({
                    smoothScrollingDuration: 600,
                    smoothScrolling:true,
                    easing: 'easeInOutQuart',
                    render: function(e){
                        if(e.curTop > 11700)
                        {
                            if($.browser.msie || $('html').hasClass('no-csstransforms3d'))
                            {
                                $('.product-cube-face1').fadeOut();
                                $('.product-cube-face2').fadeIn();
                            }
                            else
                            {
                                $('.product-cube').addClass('product-cube-3d');
                            }

                        }
                        else
                        {
                            if($.browser.msie || $('html').hasClass('no-csstransforms3d'))
                            {
                                $('.product-cube-face1').fadeIn();
                                $('.product-cube-face2').fadeOut();
                            }
                            else
                            {
                                $('.product-cube').removeClass('product-cube-3d');
                            }
                        }
                    }
                });
            } , 4000 );

        }
        
        // init second load animation
        $('.noload').removeClass('.noload')
        var $p2 = $('#p2');
        $(document.body).queryLoader2({
            minimumTime: 1000,
            onLoading: function( percentage ){
                $p2.css('width' , percentage + '%');
            },
            onComplete: function(){
                $('html,body').css('overflow-y','auto');
                $p2.fadeOut();
                // show page prev and page next navigater
                $('.page-nav-next').fadeIn();
            }
        });
    });
}
var $probar = $('#process-bar');
// query loading
$(document.body).queryLoader2({
    minimumTime: 1000,
    onLoading : function( percentage ){
        $probar.css( 'width' , percentage + '%' );
    },
    onComplete: loadComplete
});
 

// init tangle color for cream
var initTangleColorTimer = null;
function initTangleColor (){
    clearTimeout( initTangleColorTimer );
    initTangleColorTimer = setTimeout(function(){
        var $mainRight = $('.main-right');
        var bottomOffset = $mainRight.removeClass('rotate-right')
            .find('.main-right-bottom')
            .offset();
        $mainRight.find('.product i')
            .each(function(){
                var off = $(this).offset();
                $(this).toggleClass('reverse' , off.top > bottomOffset.top );
            });
        $mainRight.addClass('rotate-right');
    } , 100);
}

if( !isMostUglyIe ){
    $(window)
        .scroll(initTangleColor)
        .resize(initTangleColor)
//        .scroll(function(){
//            location.hash="#" + $(this).scrollTop();
//        })
        // resize for models element width
        .resize(function(){
            var $models = $('#models');
            $models.width( $models.height() );
        });

    setTimeout(function(){
        window.scrollTo(0,0);
    } , 500 );
} else {
    // fix main-right
    var $right = $('.main-right');
    var rHeight = $right.height();
    var winHei = $(window).height();
    $(window).scroll(function(){
        var sTop = $(this).scrollTop();
        $right.stop(true , true ).animate({'top': sTop + winHei - rHeight } , 500);
    })
    .resize(function(){
        winHei = $(window).height();
    });
}



// for prev page and next page
var page_steps = [0 , 1037 , 3581 , 5505 , 7909 , 9923];
var nav_steps = [8 , 94 , 179 , 266 , 355];

$('.page-nav-next').click(function(){
    var scrollTop = $(window).scrollTop();
    var next_step = page_steps[page_steps.length-1] ;
    $.each(page_steps , function( i , step){
        if( scrollTop + 50 > step ){
            next_step = page_steps[i+1] || $(document).height();
        }
    });

    $('html,body').stop( true , true ).animate({
        scrollTop: next_step
    } , 2000 );
    return false;
});

// for navigater
$('.product-bg-wrap li').click(function(){
    var index = $(this).index();
    var tarScrollTop = page_steps[ index + 1 ];
    var tarNavTop = nav_steps[index];
    var currentNavTop = $('.product-circle-active').css('top');

    var time = 2000;
    $('html,body').stop(true,true)
        .animate({
            scrollTop: tarScrollTop
        } , time,function(){
//            $('.product-circle-active2').hide();
//            $('.product-circle-active').show();
//            $('.product-bg-wrap li span').removeClass('moving');
//            $('.product-bg-wrap li span').removeClass('active');
            $('.product-bg-wrap i').show();
        });
//    $('.product-circle-active').hide();
    $('.product-bg-wrap li .product-light2 img').css({'opacity':0});
//    $('.product-circle-active2').show().css({top:currentNavTop});
//    $('.product-circle-active2').stop(true,true).animate({top:tarNavTop});
//    $('.product-bg-wrap li span').addClass('moving');
//    $('.product-bg-wrap li').eq(index).find('span').addClass('active');
    $('.product-bg-wrap i').hide();
});

$('.product-bg-wrap li').hover(function(){
    if(!$(this).hasClass('skrollable-between'))
    {
        $(this).find('.product-light2 img').animate({opacity:1});
    }
},function(){
    $(this).find('.product-light2 img').animate({opacity:0},200);
});

// init tmll
$('.tmall').hover(function(){
    $(this).animate({
        top: 93,
        right: 0
    } , 300 );
} , function(){
    var sTop = $(window).scrollTop();
    if( sTop > 1000 ){
        $(this).animate({
            top: 78,
            right: -76
        } , 300 );
    }
});

$('.playvideo').fancybox({
    maxWidth: 768,
    maxHeight: 432,
    type: 'iframe',
    iframe: {scrolling:'no'},
    openMethod : 'dropIn',
    padding: 0
});

(function ($, F) {
    F.transitions.dropIn = function() {
        var endPos = F._getPosition(true);
        endPos.opacity = 0;
        endPos.top = (parseInt(endPos.top, 10) - 400);
        F.wrap.css(endPos).show().animate({
            top: endPos.top + 400,
            opacity: 1
        }, {
            easing: 'easeOutQuart',
            duration: 800,
            complete: F._afterZoomIn
        });
    };

    F.transitions.dropOut = function() {
        F.wrap.removeClass('fancybox-opened').animate({
            top: '-=200'
        }, {
            duration: F.current.closeSpeed,
            complete: F._afterZoomOut
        });
    };

}(jQuery, jQuery.fancybox));


//tracking
$('.sina-share').bind('click',function(){
    ga('send', 'event', 'sina', 'follow', 'follow');
});

$('.product-bg li').eq(0).bind('click',function(){
    ga('send', 'event', 'PRO', '1', '1');
});

$('.product-bg li').eq(1).bind('click',function(){
    ga('send', 'event', 'PRO', '2', '2');
});

$('.product-bg li').eq(2).bind('click',function(){
    ga('send', 'event', 'PRO', '3', '3');
});

$('.product-bg li').eq(3).bind('click',function(){
    ga('send', 'event', 'PRO', '4', '4');
});

$('.product-bg li').eq(4).bind('click',function(){
    ga('send', 'event', 'PRO', '5', '5');
});

$('.tmall').bind('click',function(){
    ga('send', 'event', 'tmall', 'tmall', 'tmall');
});

$('.tmall-link').bind('click',function(){
    ga('send', 'event', 'tmall', 'tmall', 'tmall');
});