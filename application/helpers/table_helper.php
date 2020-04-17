<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('table()')) {
    function table_url()
    {
        $CI = &get_instance();
        return $CI->load->view('layouts/table_url');
    }

    function table($table_title, $table_key, $table_data)
    {
        $data['table_title'] = $table_title;
        $data['table_key'] = $table_key;
        $data['table_data'] = $table_data;

        $CI = &get_instance();
        return $CI->load->view('layouts/table', $data);
    }
}
