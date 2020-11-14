<?php // you don't have to put a closing tag if the file is only using pure PHP code   
    class Pages extends CI_Controller{
        //default is a home page
        //pages/view/about pages view/view function/ 'about'  page file under pages directory as a string
        public function view($page = 'home'){
            // APPPATH is a code igniter constant that gives us the path to our application folder
            //the argument for the boolean is just a string
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                //code igniter function to show a 404 error
                show_404(); 
            }
            //key value array representing the variables that represent titles of pages 
            //ucfirst is a function in PHP to make the first character in a string capitalized
            $data['title'] = ucfirst($page);
            //load and view are PHP functions
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }

