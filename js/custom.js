$(document).ready(function () {

    "use strict";

    /* Setting Sizes 
    -----------------------------------------------------*/

    function setSizes() {

        /* General */
        $('.logo-content').css({
            'margin-top': '-' + ($('.logo-content').height() / 2) + 'px'
        });

        /* Profile */
        $('#profile').css({
            'height': ($(window).height()) + 'px'
        });
        $('.profile-content').css({
            'margin-top': '-' + ($('.profile-content').height() / 2) + 'px'
        });

        /* Portfolio */
        $('.project-info').css({
            'margin-top': '-' + ($('.project-info').height() / 2) + 'px'
        });

        /* Contact */
        $('#contact, .contact-content').css({
            'min-height': ($(window).height()) + 'px'
        });

    }

    setSizes();
    $(window).resize(function () {
        setSizes();
    });

    /* Navigation */

    $('#page-content section').waypoint(function (direction) {
        if (direction == 'down') {

            var sectionName = '#' + $(this).attr('id');
            var menuLink = $('.me-nav li').children('a').attr('href');
            var activeLink = $('.me-nav li.active');

            var newLink = $('li.menu-item a[href="' + sectionName + '"]');

            $(activeLink).removeClass('active');
            $(newLink).parent('li').addClass('active');

        }
    }, {
        offset: 1
    });

    $('#page-content section').waypoint(function (direction) {
        if (direction == 'up') {

            var sectionName = '#' + $(this).attr('id');
            var menuLink = $('.me-nav li').children('a').attr('href');
            var activeLink = $('.me-nav li.active');

            var newLink = $('li.menu-item a[href="' + sectionName + '"]');

            $(activeLink).removeClass('active');
            $(newLink).parent('li').addClass('active');

            console.log('SN: ' + sectionName + ' M: ' + newLink);
        }
    }, {
        offset: function () {
            return -$(this).height() + 1;
        }
    });

    /* Resume
    -----------------------------------------------------*/

    $('.resume-box').mouseenter(function () {
        $('.resume-box').not(this).each(function () {
            $(this).addClass('disable');
        });
    });

    $('.resume-box').mouseleave(function () {
        $('.resume-box').each(function () {
            $(this).removeClass('disable');
        });
    });

    /* Portfolio 
    -----------------------------------------------------*/

    // Ajax Project Details

    var toLoad;

    function loadContent() {
        $('.project-content').load(toLoad, showNewContent());
    }

    function showNewContent() {
        $('.project-content').slideUp(300, function () {
            $('.project-content').slideDown(500, function () {
                $.waypoints('refresh')
            });
        });
    }

    function closeContent() {
        $('.project-content').delay(50).slideUp(500, 'easeOutQuart', function () {
            $('.project-loader').show(0);
            $('.project-loader .logo-loader').show(0);
            $.waypoints('refresh')
        });
        $('html, body').animate({
            scrollTop: $('#portfolio').position().top
        }, 500);
    }

    $('.ajax-portfolio-link').click(function () {
        toLoad = $(this).attr('href');
        loadContent();
        $('html, body').animate({
            scrollTop: $('.project-content').position().top
        }, 300);
        return false;
    });

    $('.ajax-project-close').click(function () {
        closeContent();
    });

    /* Smooth Scrolling
    -----------------------------------------------------*/

    $.localScroll({});

    /* Contact
    -----------------------------------------------------*/

    $('#contact-form-holder').addClass('form-hidden');
    $('.contact-form-trigger').click(function () {
        if ($('#contact-form-holder').hasClass('form-hidden')) {
            $('#contact-form-holder').removeClass('form-hidden').addClass('form-visible');
            $('.contact-form-trigger').addClass('active');
        } else
        if ($('#contact-form-holder').hasClass('form-visible')) {
            $('#contact-form-holder').removeClass('form-visible').addClass('form-hidden');
            $('.contact-form-trigger').removeClass('active');
        };
    });

    /* Animations
    -----------------------------------------------------*/

    jQuery('.animated').appear();

    $('.fade-in').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('fade-in-animation')
        });
    });

    $('.fade-in-left').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('fade-in-left-animation')
        });
    });

    $('.fade-in-right').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('fade-in-right-animation')
        });
    });

    $('.slide-in-left').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('slide-in-left-animation')
        });
    });

    $('.slide-in-right').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('slide-in-right-animation')
        });
    });

    $('.slide-in-top').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('slide-in-top-animation')
        });
    });

    $('.slide-in-bottom').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('slide-in-bottom-animation')
        });
    });

    $('.zoom-in').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('zoom-in-animation')
        });
    });

    $('.zoom-out').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('zoom-out-animation')
        });
    });

    $('.bounce-in').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('bounce-in-animation')
        });
    });

    $('.flip-in').appear(function () {
        jQuery(this).each(function () {
            jQuery(this).addClass('flip-in-animation')
        });
    });

    /* Google Map
    -----------------------------------------------------*/

    function mapInitialize() {

        var yourLatitude = 47.6097;
        var yourLongitude = -122.3331;

        var myOptions = {
            zoom: 14,
            center: new google.maps.LatLng(yourLatitude, yourLongitude - 0.01),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            panControl: false,
            zoomControl: false,
            scaleControl: false,
            streetViewControl: false,
            styles: [{
                "stylers": [{
                    "hue": "#ff1a00"
                }, {
                    "invert_lightness": true
                }, {
                    "saturation": -100
                }, {
                    "lightness": 33
                }, {
                    "gamma": 0.5
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#2D333C"
                }]
            }]
        };

        var map = new google.maps.Map(document.getElementById('google-map'), myOptions);
    }

    google.maps.event.addDomListener(window, 'load', mapInitialize);

});

// Tooltip Initialize 
function tooltipIni() {
    $("[rel='tooltip']").tooltip();
}

// Popover Initialize 
function popoverIni() {
    $("[rel='popover']").popover();
}