<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    /**
     * Default controller
     *
     */

    //  Index Page
    public function index()
    {
        // Use notif
        notif('success','Welcome to kubicode', 'This is the message');
        
        // Data for send to view
        $data['title'] = 'Home | Kubi Code';

        // Load view
        $this->load->view('layouts/header',$data);
        $this->load->view('home/index');
        $this->load->view('layouts/footer');
    }
}
