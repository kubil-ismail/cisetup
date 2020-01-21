<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('table()')) {
    function table_url() {
        $CI = &get_instance();

        return $CI->load->view('layouts/table_url');
    }
}