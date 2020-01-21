<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('request()')) {
    $CI = &get_instance();
    $CI->load->library('unirest');
    $CI->load->library('session');
    
    function request_get($url)
    {
        $CI = &get_instance();
        $headers = array('Accept' => 'application/json');

        $response = Unirest\Request::get($url,$headers);
        return $response->body;
    }

    function request_post($url, $query= null)
    {
        $CI = &get_instance();
        $headers = array('Accept' => 'application/json');

        $response = Unirest\Request::post($url, $headers, $query);
        if ($response->code == 200) {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        } else {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        }
        return $response;
    }

    function request_delete($url, $query = null)
    {
        $CI = &get_instance();
        $CI->load->library('session');
        
        $headers = array('Accept' => 'application/json');

        $response = Unirest\Request::delete($url, $headers, $query);

        if ($response->code == 200) {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        } else {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        }

        return $response;
    }

    function request_put($url, $query = null)
    {
        $CI = &get_instance();
        $CI->load->library('session');
        
        $headers = array('Accept' => 'application/json');

        $response = Unirest\Request::PUT($url, $headers, $query);

        if ($response->code == 200) {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        } else {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        }
        
        return $response;
    }

    function request_auth($url, $query = null)
    {
        $headers = array('Accept' => 'application/json');

        $response = Unirest\Request::post($url, $headers, $query);
        
        if ($response->code == 200 || $response->code == 400) {
            $response = [
                'code' => $response->code,
                'body' => $response->body
            ];
        } else {
            $response = [
                'code' => $response->code,
                'body' => 'Something Wrong Please Check And Try Again'
            ];
        }
        
        return $response;
    }
}
