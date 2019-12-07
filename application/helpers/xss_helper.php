<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
    if (!function_exists('echos()')) {
        function echos($str)
        {
            echo htmlentities($str, ENT_QUOTES, 'UTF-8');
        }
    }
