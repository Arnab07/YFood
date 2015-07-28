<?php

class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('bcrypt');
                $this->load->model('insert_model');

        }

        public function index()
        {
                //$this->load->view('header');
                 if(isset($this->session->userdata['logged_in']))
                {
                    
                   // echo $this->session->userdata['logged_in']['username'];

                     $data = array(
                        'username' => $this->session->userdata['logged_in']['username'],
                        'email' => $this->session->userdata['logged_in']['email'],
                        'user_age' => $this->session->userdata['logged_in']['user_age'],
                        'user_mob' => $this->session->userdata['logged_in']['user_mobile'],
                        'user_about' => $this->session->userdata['logged_in']['user_about']);

                    $this->load->view('cook_page',$data);
                }
                else{
                    $this->load->view('login_view', array('error' => ' ' ));
                }
                //$this->load->view('footer');
        }

        public function do_login()
        {
                $data = array(
                'name' => $this->input->post('lname'),
                'pass' => $this->input->post('lpass'),
                'choice'=>$this->input->post('log_chc')
                );
                
                
                    if ( $data['choice']=='user')
                            {
                                   $this->insert_model->login_user($data);

                            }
                    else
                        
                    {
                               $this->insert_model->login_cook($data);
                        }
                    

                

                
        }
        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            redirect('login','refresh');
        }
}
?>