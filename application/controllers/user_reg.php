<?php

class user_reg extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
        }
    function index()
    {
        $data = array(
                'user_fname','user_age','user_email' ,'user_mob','user_lname','user_pass','user_locality','user_address','user_pincode');

        $this->load->library('bcrypt');
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dfname', 'Username', 'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('dage', 'Age', 'required|regex_match[/^[0-9]{2}$/]');
        //Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('dlname', 'Last Name', 'required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('dlocal', 'Location', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('dpass', 'Password', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('dchoice', 'Choice', 'required|min_length[3]|max_length[150]');
    

        $dpass=crypt('dpass');
        if ($this->form_validation->run() == FALSE) {
                $data = array(
                'user_fname' => $this->input->post('dfname'),
                'user_age' => $this->input->post('dage'),
                'user_email' => $this->input->post('demail'),
                'user_mob' => $this->input->post('dmobile'),
                'user_lname' => $this->input->post('dlname'),
                'user_pass' => $this->bcrypt->hash_password($this->input->post('dpass')),
                'user_loc' => $this->input->post('dlocal'),
                'user_choice' => $this->input->post('dchoice'));
                

            $this->load->view('insert_user',$data);
            $this->load->view('footer');
        } else {
            //Setting values for tabel columns
           


            $data = array(
                'user_fname' => $this->input->post('dfname'),
                'user_age' => $this->input->post('dage'),
                'user_email' => $this->input->post('demail'),
                'user_mob' => $this->input->post('dmobile'),
                'user_lname' => $this->input->post('dlname'),
                'user_pass' => $this->bcrypt->hash_password($this->input->post('dpass')),
                'user_loc' => $this->input->post('dlocal'),
                'user_choice' => $this->input->post('dchoice')
            );
            //Transfering data to Model
            
            $this->insert_model->form_insert_user($data);
            
            //Loading View
            //$this->load->view('insert_view', $data);
        }
    }
    }
    ?>