<?php // you don't have to put a closing tag if the file is only using pure PHP code   
    class Verified extends CI_Controller{
        //default is a home page
        //pages/view/about pages view/view function/ 'about'  page file under pages directory as a string
        public function index(){
            //key value array representing the variables that represent titles of pages 
            //ucfirst is a function in PHP to make the first character in a string capitalized
            $data['title'] = 'Email Verified';
            //load and view are PHP functions
            $this->load->view('templates/header');
            $this->load->view('verified/index', $data);
            $this->load->view('templates/footer');
        }
    }

