; (function ($, document, window) {
    var $doc = $(document);
    var $win = $(window);
    var $body = $('html, body');

    $doc.ready(function () {
        var $scroll_btn = $('.scroll-top');
        var $header_list_items = $('#main-nav ul li');
        var $scroll_down_btn = $('#scroll-down-btn');
        var $main_nav = $('#main-nav');
        var header_positions;
        var $canvas_btn = $('.canvas-btn');


        // Smooth scroll for navigation links
        $("a[href^='#']").click(function(e) {
            e.preventDefault();
            
            var href_link = $(this).attr('href');

            var position;
            
            if (href_link == '#about-sec') {
                position = $($(this).attr("href")).offset().top;

                $body.animate({
                    scrollTop: (position - 30)
                }, 500 );
                
            } else if (href_link == '#') {

                // Animate to top
                $body.animate({
                    scrollTop: 0
                }, 500 );
            } else {
                position = $($(this).attr("href")).offset().top;

                // Animate to section
                $body.animate({
                    scrollTop: (position - 25)
                }, 500 );
            }
            


           
            

        });

        // Scroll Down button
        $scroll_down_btn.on('click', function(){
            var about_me_position = $('#about-sec').offset().top;

            $body.animate({
                scrollTop: (about_me_position - 30)
            }, 500);
        });


        // Scroll to Top button
        $scroll_btn.on('click', function () {
            $body.animate({ scrollTop: 0 }, 500);
        });

        function calculateScrollTop() {
            if ($win.scrollTop() < 450) {
                $scroll_btn.fadeOut(200);
            } else {
                $scroll_btn.fadeIn(200);
            }
        }

        function calculate_active_header_positions(){
            header_positions = {
                "about-sec": $('#about-sec').offset().top - 50,
                "services-sec": $('#services-sec').offset().top - 30,
                "history-sec": $('#history-sec').offset().top - 30,
                "portfolio-sec": $('#portfolio-sec').offset().top - 30,
                "skills-sec": $('#skills-sec').offset().top - 30,
                "contact-sec": $('#contact-sec').offset().top -30
            }
        }

        calculate_active_header_positions();

        function change_active_header_item() {       
            var window_scroll = $win.scrollTop();


            $header_list_items.removeClass('active');
            if (window_scroll < header_positions["about-sec"]) {

                $header_list_items.eq(0).addClass('active');

            } else if (window_scroll >= header_positions["about-sec"] && window_scroll < header_positions["services-sec"]) {

                $header_list_items.eq(1).addClass('active');

            } else if (window_scroll >= header_positions["services-sec"] && window_scroll < header_positions["history-sec"]) {

                $header_list_items.eq(2).addClass('active');

            } else if (window_scroll >= header_positions["history-sec"] && window_scroll < header_positions["portfolio-sec"]) {

                $header_list_items.eq(3).addClass('active');

            } else if (window_scroll >= header_positions["portfolio-sec"] && window_scroll < header_positions["skills-sec"]) {

                $header_list_items.eq(4).addClass('active');
                
            } else if (window_scroll >= header_positions["skills-sec"] && window_scroll < header_positions["contact-sec"]) {

                $header_list_items.eq(5).addClass('active');

            } else if (window_scroll >= header_positions["contact-sec"]) {

                $header_list_items.eq(6).addClass('active');

            }

            
        }

        $win.on('resize scroll', function () {
            calculateScrollTop();
            check_if_in_view();
            change_active_header_item();
        });

        $win.on('resize', function(){
            calculate_active_header_positions();
        });

        

        // Animate objects on scroll
        var $animation_elements = $('.animation-element');

        function check_if_in_view() {
            var window_height = $win.height();
            var window_top_position = $win.scrollTop();
            var window_bottom_position = (window_top_position + window_height);

            $.each($animation_elements, function() {
                var $element = $(this);
                var element_height = $element.outerHeight();
                var element_top_position = $element.offset().top;
                var element_bottom_position = (element_top_position + element_height);
                // Check to see if element is in viewport
                if ((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                }

            });
        };


        // Validate form

        var $name_field = $('#name_field');
        var $name_error = $('#contact-form .error-text--name');

        var $email_field = $('#email_field');
        var $email_error = $('#contact-form .error-text--email');

        var $subject_field = $('#subject_field');
        var $subject_error = $('#contact-form .error-text--subject');

        var $message_field = $('#message_field');
        var $message_error = $('#contact-form .error-text--message');

        var $submit_btn = $('.submit-btn');

        function checkName(isFocusSet = false) {
            var name_value = $name_field.val();

            if (name_value.trim() == '') {
                $name_error.show();
                $name_field.addClass('error-input');
                if (isFocusSet) {
                    $name_field.focus();
                }
                return false;
            } else {
                $name_error.hide();
                $name_field.removeClass('error-input');
                return true;
            }
        }

        function checkEmail(isFocusSet = false) {
            var email_value = $email_field.val();
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

            if (email_value.trim() == '') {
                $email_error.text('REQUIRED');
                $email_error.show();
                $email_field.addClass('error-input');
                
                if (isFocusSet) {
                    $email_field.focus();
                }
                return false;
            } else {

                if (pattern.test(email_value)) {
                    $email_error.hide();
                    $email_field.removeClass('error-input');
                    return true;
                } else {
                    $email_error.text('INVALID');
                    $email_error.show();
                    $email_field.addClass('error-input');

                    if (isFocusSet) {
                        $email_field.focus();
                    }
                    return false;
                }
            }

        }

        function checkSubject(isFocusSet = false) {
            var subject_value = $subject_field.val();

            if (subject_value.trim() == '') {
                $subject_error.show();
                $subject_field.addClass('error-input');

                if (isFocusSet) {
                    $subject_field.focus();
                }
                return false;
            } else {
                $subject_error.hide();
                $subject_field.removeClass('error-input');
                return true;
            }
        }

        function checkMessage(isFocusSet = false) {
            var message_value = $message_field.val();

            if (message_value.trim() == '') {
                $message_error.show();
                $message_field.addClass('error-input');

                if (isFocusSet) {
                    $message_field.focus();
                }
                return false;
            } else {
                $message_error.hide();
                $message_field.removeClass('error-input');
                return true;
            }
        }

        function validateContactForm() {
            var is_form_valid = checkName(true) && checkEmail(true) && checkSubject(true) && checkMessage(true);

            return is_form_valid;
        }


        $name_field.on('input', function () {
            checkName();
        });

        $email_field.on('input', function () {
            $email_error.hide();
            $email_field.removeClass('error-input');
        });

        $email_field.on('blur', function(){
            if ($email_field.val() == '') { 
                $email_field.removeClass('error-input');
                $email_error.hide();
            } else {
                checkEmail();
            }
        });

        $subject_field.on('input', function () {
            checkSubject();
        });

        $message_field.on('input', function () {
            checkMessage();
        });


        $submit_btn.on('click submit', function (e) {
            e.preventDefault();
            var is_form_ready_to_send = validateContactForm();
            if (is_form_ready_to_send) {
                
                var details = $('#contact-form').serialize();
            
                $submit_btn.attr('disabled', 'disabled');

                
                $.ajax({
                    type: 'POST',
                    url: ajax_object.url,
                    data: {
                        'action': 'send_email_ajax',
                        'data': details,
                        'security': ajax_object.security
                    },

                    success: function(data) {
                        $('#dialog').html('Thank you for your message. We will contact you in the next few days');
                        $('#dialog').dialog('open');
                    },

                    fail: function(data) {
                        $('#dialog').html("Sorry. The message you sent did not receive to its target");
                        $('#dialog').dialog('open');
                    }
                });
            }

        });

        function initiateDialogs() {
            $( "#dialog" ).dialog({
                autoOpen: false,
                dialogClass: "center custom-dialog",
                width: '350px',
                buttons: [
                  {
                    text: "OK",
                    click: function() {
                        $submit_btn.removeAttr('disabled');
                        $( this ).dialog( "close" );
                    }
                  }
                ],

                modal: true
            });
        }

        // Canvas menu
        $canvas_btn.on('click', function(){

            if ($main_nav.hasClass('canvas-menu-open')) {
                $main_nav.removeClass('canvas-menu-open');
            } else {
                $main_nav.addClass('canvas-menu-open');
            }
            
        });

        // Canvas menu links
        $('#main-nav .canvas-menu li a').on('click', function(){
            $main_nav.removeClass('canvas-menu-open');
        });

        // Initiate functions
        calculateScrollTop();
        check_if_in_view();
        change_active_header_item();
        initiateDialogs();

    });
})(jQuery, document, window);