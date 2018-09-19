; (function ($, document, window) {
    var $doc = $(document);
    var $win = $(window);
    var $body = $('html, body');

    $doc.ready(function () {
        var $scroll_btn = $('.scroll-top');
        var $header_list_items = $('#main-nav ul li');


        $("a[href^='#']").click(function(e) {
            e.preventDefault();
               
            var position = $($(this).attr("href")).offset().top;
           
            $("body, html").animate({
                scrollTop: (position - 50)
            }, 500 );

        });

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

        $win.on('resize scroll', function () {
            // console.log($win.scrollTop());
            calculateScrollTop();
            check_if_in_view();
            change_active_header_item();
        });

        

        // Animate objects on scroll
        var $animation_elements = $('.animation-element');

        function check_if_in_view() {
            var window_height = $win.height();
            var window_top_position = $win.scrollTop();
            var window_bottom_position = (window_top_position + window_height);

            $.each($animation_elements, function () {
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

        // Initiate functions
        calculateScrollTop();
        check_if_in_view();
        change_active_header_item();

        // Validate form
        var is_form_valid = true;

        var $name_field = $('#name_field');
        var $name_error = $('#contact-form .error-text--name');

        var $email_field = $('#email_field');
        var $email_error = $('#contact-form .error-text--email');

        var $subject_field = $('#subject_field');
        var $subject_error = $('#contact-form .error-text--subject');

        var $message_field = $('#message_field');
        var $message_error = $('#contact-form .error-text--message');

        var $submit_btn = $('.submit-btn');

        function checkName() {
            var name_value = $name_field.val();

            if (name_value.trim() == '') {
                $name_error.show();
                is_form_valid = false;
            } else {
                $name_error.hide();
            }
        }

        function checkEmail() {
            var email_value = $email_field.val();
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

            if (email_value.trim() == '') {
                $email_error.text('Please enter your email');
                $email_error.show();
                is_form_valid = false;
            } else {

                if (pattern.test(email_value)) {
                    $email_error.hide();
                } else {
                    $email_error.text('Please enter a valid email address');
                    $email_error.show();
                    is_form_valid = false;
                }
            }

        }

        function checkSubject() {
            var subject_value = $subject_field.val();

            if (subject_value.trim() == '') {
                $subject_error.show();
                is_form_valid = false;
            } else {
                $subject_error.hide();
            }
        }

        function checkMessage() {
            var message_value = $message_field.val();

            if (message_value.trim() == '') {
                $message_error.show();
                is_form_valid = false;
            } else {
                $message_error.hide();
            }
        }

        function validateContactForm() {
            is_form_valid = true;
            checkName();
            checkEmail();
            checkSubject();
            checkMessage();
            console.log('Is form valid? ' + is_form_valid);
        }


        $name_field.on('input blur', function () {
            checkName();
        });

        $email_field.on('focus', function () {
            $email_error.hide();
        });

        $email_field.on('blur', function () {
            checkEmail();
        });

        $subject_field.on('input blur', function () {
            checkSubject();
        });

        $message_field.on('input blur', function () {
            checkMessage();
        });


        $submit_btn.on('click submit', function (e) {
            // validateContactForm();
            // if (!is_form_valid) {
                e.preventDefault();
                var details = $('#contact-form').serialize();
                
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
                        alert(data);
                    },

                    fail: function(data) {
                        alert('ERROR: Email has not been sent');
                    }
                });
            // }
        });

    });
})(jQuery, document, window);