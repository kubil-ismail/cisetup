<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('notif()')) {
        function notif($type, $title, $message = '', $url = false, $time = 2000)
        {
            $data['type'] = $type;
            $data['title'] = $title;
            $data['message'] = $message;
            $data['time'] = $time;
            
            if ($url === false) {
                $data['url'] = 404;
            } else {
                $data['url'] = base_url($url);
            }
            
            $CI = &get_instance();

            return $CI->load->view('notif', $data);
        }
    }