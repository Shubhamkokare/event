(function($) {
    "use strict";
    $(document).ready(function() {

        /* -------------------------------------------------
            menu 
        ------------------------------------------------- */
        if ($('.menu-bar').length) {
            $(".menu-bar").on('click', function() {
                $(".ba-navbar").toggleClass("ba-navbar-show", "linear");
            });
            $('body').on('click', function(event) {
                if (!$(event.target).closest('.menu-bar').length && !$(event.target).closest('.ba-navbar').length) {
                    $('.ba-navbar').removeClass('ba-navbar-show');
                }
            });
            $(".menu-close").on('click', function() {
                $(".ba-navbar").toggleClass("ba-navbar-show", "linear");
            });
        }

        /* -------------------------------------------------
            add balance 
        ------------------------------------------------- */
        if ($('.ba-add-balance-btn').length) {
            $(".ba-add-balance-btn").on('click', function() {
                $(".add-balance-inner-wrap").toggleClass("add-balance-inner-wrap-show", "linear");
            });
            $('body').on('click', function(event) {
                if (!$(event.target).closest('.ba-add-balance-btn').length && !$(event.target).closest('.add-balance-inner-wrap').length) {
                    $('.add-balance-inner-wrap').removeClass('add-balance-inner-wrap-show');
                }
            });
        }

        /*------------------------------------------------
            Search Popup
        ------------------------------------------------*/
        var bodyOvrelay = $('#body-overlay');
        var searchPopup = $('#search-popup');
        var sidebarMenu = $('#sidebar-menu');

        $(document).on('click', '#body-overlay', function(e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
            sidebarMenu.removeClass('active');
        });
        $(document).on('click', '.search', function(e) {
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });


        /*------------------------------------------------
            trading-product-slider
        ------------------------------------------------*/
        var leftArrow = '<i class="fa fa-angle-left"></i>';
        var rightArrow = '<i class="fa fa-angle-right"></i>';
        $('.send-money-slider').owlCarousel({
            stagePadding: 50,
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 2
                },
                374: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        $('.blog-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        $('.welcome-slider').owlCarousel({
            loop: true,
            items: 1,
            nav: false,
            dots: true,
            smartSpeed: 1500,
        });


        /* -------------------------------------------------------------
            carousels js
        ------------------------------------------------------------- */
        $('.carousel-1').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            items: 1,
        });

        //carousel-2
        $('.carousel-2').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            margin: 20,
            items: 2,
        });

        //carousel-3
        $('.carousel-3').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            margin: 20,
            items: 2,
            stagePadding: 70,
        });

        //carousel-4
        $('.carousel-4').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            margin: 20,
            items: 3,
        });

        //carousel-5
        $('.carousel-5').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 1500,
            margin: 10,
            items: 4,
        });

        /* -------------------------------------------------------------
        	RoundCircle Progress js
        ------------------------------------------------------------- */
        if ($('.chart-circle').length) {
            $('.chart-circle').each(function() {
                let $this = $(this);
                $this.circleProgress({
                    fill: {
                        color: $this.attr('data-color')
                    },
                    size: $this.height(),
                    startAngle: -Math.PI / 4 * 2,
                    emptyFill: 'rgba(0,0,0,0.2)',
                    lineCap: 'round'
                });
            });
        }

        /* circle-one */
        $('.single-goal-one .chart-circle').circleProgress({
            fill: {
                gradient: ["#11A44C", "#11A44C"]
            }
        });
        /* circle-two */
        $('.single-goal-two .chart-circle').circleProgress({
            fill: {
                gradient: ["#FB025C", "#FB025C"]
            }
        });
        /* circle-three */
        $('.single-goal-three .chart-circle').circleProgress({
            fill: {
                gradient: ["#02A1FB", "#02A1FB"]
            }
        });
        /* circle-four */
        $('.single-goal-four .chart-circle').circleProgress({
            fill: {
                gradient: ["#7E02FB", "#7E02FB"]
            }
        });


        // /*-----------------
        // auto notification 
        // ------------------*/
        // $('#overlay').modal('show');

        // setTimeout(function() {
        //     $('#overlay').modal('hide');
        // }, 1500);

        var myModal = document.getElementById('myModal');
        var myInput = document.getElementById('myInput');


        // /*-----------------
        // auto notification 
        // ------------------*/
        const storageDark = localStorage.getItem('dark')
        console.log(storageDark)
        if($('body').hasClass('dark')){
            changeMode('true');
        } else {
            changeMode('true');
        }
        if (storageDark !== 'null') {
            changeMode(storageDark)
        }
        jQuery(document).on("change", '.change-mode input[type="checkbox"]' ,function (e) {
            const dark = $(this).attr('data-active');
            if (dark === 'true') {
                $(this).attr('data-active','false')
            } else {
                $(this).attr('data-active','true')
            }
            changeMode(dark)
        })
        function changeMode (dark) {
            const body = jQuery('body')
            if (dark === 'true') {
                // $('[data-mode="toggle"]').find('i.a-right').removeClass('ri-sun-line');
                // $('[data-mode="toggle"]').find('i.a-left').addClass('ri-moon-clear-line');
                $('#dark-mode').prop('checked', true).attr('data-active', 'false')
                $('.darkmode-logo').removeClass('d-none')
                $('.light-logo').addClass('d-none')
                body.addClass('dark')
                dark = true
            } else {
                // $('[data-mode="toggle"]').find('i.a-left').removeClass('ri-moon-clear-line');
                // $('[data-mode="toggle"]').find('i.a-right').addClass('ri-sun-line');
                $('#dark-mode').prop('checked', false).attr('data-active', 'true');
                $('.light-logo').removeClass('d-none')
                $('.darkmode-logo').addClass('d-none')
                body.removeClass('dark')
                dark = false
            }
            updateLocalStorage(dark)
            const event = new CustomEvent("ChangeColorMode", {detail: {dark: dark} });
            document.dispatchEvent(event);
        }
        function updateLocalStorage(dark) {
            localStorage.setItem('dark', dark)
        }


    });

    $(window).on('load', function() {

        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(0);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();

        /*---------------------
            Cancel Preloader
        ----------------------*/
        $(document).on('click', '.cancel-preloader a', function(e) {
            e.preventDefault();
            $("#preloader").fadeOut(2000);
        });

    });

})(jQuery);