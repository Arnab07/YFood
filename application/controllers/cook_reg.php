<?php

class cook_reg extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_model');
    }
    function index()
    {

        $data = array(
                'cook_name','cook_age','cook_email' ,'cook_mob','cook_about','cook_pass','cook_city','cook_locality','cook_address','cook_pincode');

        $this->load->library('bcrypt');
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('dage', 'Age', 'required|regex_match[/^[0-9]{2}$/]');
        //Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('dabout', 'About', 'required|min_length[5]|max_length[250]');
        $this->form_validation->set_rules('dpass', 'Password', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('dcity', 'City', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('dlocal', 'Locality', 'required|min_length[5]|max_length[50]');

        //Validating Address Field
        $this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');
        $this->form_validation->set_rules('dpin', 'Mobile No.', 'required|regex_match[/^[0-9]{6}$/]');
        $dpass=crypt('dpass');
        if ($this->form_validation->run() == FALSE) {
                $data = array(
                'cook_name' => $this->input->post('dname'),
                'cook_age' => $this->input->post('dage'),
                'cook_email' => $this->input->post('demail'),
                'cook_mob' => $this->input->post('dmobile'),
                'cook_about' => $this->input->post('dabout'),
                'cook_pass' =>  $this->bcrypt->hash_password($this->input->post('dpass')),
                'cook_city' => $this->input->post('dcity'),
                'cook_locality' => $this->input->post('dlocal'),
                'cook_address' => $this->input->post('daddress'),
                'cook_pincode' => $this->input->post('dpin'));

            $this->load->view('insert_view',$data);
            $this->load->view('footer');
        } else {
            //Setting values for tabel columns
           


            $data = array(
                'cook_name' => $this->input->post('dname'),
                'cook_age' => $this->input->post('dage'),
                'cook_email' => $this->input->post('demail'),
                'cook_mob' => $this->input->post('dmobile'),
                'cook_about' => $this->input->post('dabout'),
                'cook_pass' => $this->bcrypt->hash_password($this->input->post('dpass')),
                'cook_city' => $this->input->post('dcity'),
                'cook_locality' => $this->input->post('dlocal'),
                'cook_address' => $this->input->post('daddress'),
                'cook_pincode' => $this->input->post('dpin')
            );
            //Transfering data to Model
            
            $this->insert_model->form_insert($data);
            
            //Loading View
            //$this->load->view('insert_view', $data);
        }
    
    }

}

?>