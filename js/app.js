; (function ($, document, window) {
    var $doc = $(document);
    var $win = $(window);
    var $body = $('html, body');

    $doc.ready(function () {
        var $scroll_btn = $('.scroll-top');
        var $header_list_items = $('#main-nav ul li');
        var $scroll_down_btn = $('#scroll-down-btn');
        var $main_nav = $('#main-nav');


        // Smooth scroll for navigation links
        $("a[href^='#']").click(function(e) {
            e.preventDefault();
               
            var position = $($(this).attr("href")).offset().top;
           
            $body.animate({
                scrollTop: (position - 50)
            }, 500 );

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

        function change_active_header_item() {       
            var window_scroll = $win.scrollTop();

            $header_list_items.removeClass('active');
            if (window_scroll < 500) {
                $header_list_items.eq(0).addClass('active');
            } else if (window_scroll >= 500 && window_scroll < 1100) {
                $header_list_items.eq(1).addClass('active');
            } else if (window_scroll >= 1100 && window_scroll < 1800) {
                $header_list_items.eq(2).addClass('active');
            } else if (window_scroll >= 1800) {
                $header_list_items.eq(3).addClass('active');
            }

            
        }
  
        function change_navigation_size() {
            var about_me_position = $('#about-sec').offset().top;
            var window_scroll = $win.scrollTop();

            if (window_scroll >= (about_me_position - 30)) {
                $main_nav.addClass('small');
            } else {
                $main_nav.removeClass('small');
            }

        }

        $win.on('resize scroll', function () {
            // console.log($win.scrollTop());
            calculateScrollTop();
            check_if_in_view();
            change_active_header_item();
            change_navigation_size();
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
        // var is_form_valid = true;

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
                    $email_error.text('Enter a valid email address');
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
            console.log('Is form valid? ' + is_form_valid);
            return is_form_valid;
        }


        $name_field.on('input', function () {
            checkName();
        });

        $email_field.on('blur', function () {
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
                        // alert('Your email has been sent successfully!');
                        // alert(data);
                        $( "#dialog" ).dialog({
                            dialogClass: "center",
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
                    },

                    fail: function(data) {
                        alert('ERROR: Email has not been sent');
                    }
                });
            }

        });


        // Initiate functions
        calculateScrollTop();
        check_if_in_view();
        change_active_header_item();
        change_navigation_size();

    });
})(jQuery, document, window);