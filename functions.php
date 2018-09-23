<?php
    function load_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_script('fontawesome-all.js', get_template_directory_uri() . '/js/fontawesome-all.js');
        wp_enqueue_script('jquery.js', get_template_directory_uri() . '/js/jquery.js');
        wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app.js');


        
        wp_localize_script( 'app.js', 'ajax_object', array( 'url' => admin_url( 'admin-ajax.php' ),
                                                            'security' => wp_create_nonce('send_email_nonce') ) );
    }
    
    add_action('wp_enqueue_scripts', 'load_resources');

    function send_email_ajax() {

        if (! check_ajax_referer( 'send_email_nonce', 'security' )) {

            wp_send_json_error( 'Invalid security token sent.' );
            wp_die();
            
        } else {
            
            $data = $_POST['data'];
            $parsed_str = array();
            parse_str($data, $parsed_str);

            $name = $parsed_str['f_name'];
            $from_email = $parsed_str['f_email'];
            $subject = $parsed_str['f_subject'];
            $body = $parsed_str['f_message'];
            $to_email = 'spacedefender48@gmail.com';
            $headers = 'From: ' . $name . " <" . $from_email . ">";

            // apply_filters( 'wp_mail_from', $from_email);

            // echo "Sending email from " . $name . " <" . $from_email . "> to " . $to_email . " on subject " . $subject . " with text " . $body . ". Header - " . $headers;
            $email_status = wp_mail($to_email, $subject, $body, $headers);
            var_dump($email_status);
            if ($email_status) {
                echo "An email has been sent.";
            } else {
                echo "Error: email has not been sent";
            }
        }

        
        die();
    }

    add_action('wp_ajax_send_email_ajax', 'send_email_ajax');
    add_action('wp_ajax_nopriv_send_email_ajax', 'send_email_ajax');

    

?>