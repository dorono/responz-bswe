;// Themify Theme Scripts - https://themify.me/
(function ($) {
        'use strict';
        $(function () {

                /////////////////////////////////////////////
                // Scroll to top 							
                /////////////////////////////////////////////
                $('.back-top a').on('click', function (e) {
                        e.preventDefault();
                        Themify.scrollTo();
                });

                /////////////////////////////////////////////
                // append #main-nav link attribute with a <span> tag
                /////////////////////////////////////////////
                $('#main-nav').children('li').each(function () {
                        var anchor = $(this).children('a'),
                                title = anchor.attr('title');
                        if (title) {
                                anchor.html(anchor.html() + " <span>" + title + "</span>");
                        }
                });

                /////////////////////////////////////////////
                // Toggle menu on mobile 							
                /////////////////////////////////////////////
                $("#menu-icon").on('click', function () {
                        $("#headerwrap #main-nav").fadeToggle();
                        $("#headerwrap #searchform").hide();
                        $(this).toggleClass("active");
                });

                /////////////////////////////////////////////
                // Toggle searchform on mobile 							
                /////////////////////////////////////////////
                $("#search-icon").on('click', function () {
                        $("#headerwrap #searchform").fadeToggle();
                        $("#headerwrap #main-nav").hide();
                        $('#headerwrap #s').focus();
                        $(this).toggleClass("active");
                });

                if (Themify.isTouch && typeof $.fn.themifyDropdown != 'function') {
                        Themify.LoadAsync(themify_vars.url + '/js/themify.dropdown.js', function () {
                                $('#main-nav').themifyDropdown();
                        }, null, null, function () {
                                return typeof $.fn.themifyDropdown !== 'undefined';
                        });
                }
                $('#main-nav .menu-item-has-children').on('focusin focusout', function () {
                        $(this).toggleClass('dropdown-open');
                });
        });

        $(window).on('load', function () {
                // EDGE MENU //
                $("#main-nav li").on('mouseenter mouseleave dropdown_open', function (e) {
                        if ($('ul', this).length) {
                                var elm = $('ul:first', this),
                                        off = elm.offset(),
                                        l = off.left,
                                        w = elm.width(),
                                        docW = $(window).width(),
                                        isEntirelyVisible = (l + w <= docW);

                                if (!isEntirelyVisible) {
                                        $(this).addClass('edge');
                                } else {
                                        $(this).removeClass('edge');
                                }
                        }
                });
        });

}(jQuery));