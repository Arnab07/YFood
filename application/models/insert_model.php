<?php

class insert_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
 function form_insert($data){
 //Inserting in Table(students) of Database(college) 
 	 		$msg['query1']= $this->db->get('cook_reg');
            
            
            $qry1 = $this->db->query("select * from cook_reg where cook_email='".$data['cook_email']."' order by cook_id ");
            $qry2 = $this->db->query("select * from cook_reg where cook_mob='".$data['cook_mob']."' order by cook_id ");

            $msg['query1'] = $qry1->result();
            if($qry1->num_rows()>0 || $qry2->num_rows()>0)
			{
					if($qry1->num_rows()>0)
					{
					$data['message'] = 'Email Already Registered';
					}
					else
					{
					$data['message'] = 'Mobile Already Registered';	
					}

		            //Loading View
		           $this->load->view('insert_view', $data);
		           $this->load->view('footer');
							
			}
			else
			{
       		$this->db->insert('cook_reg', $data);
       		$data['message'] = 'Registration Successful';  
       		$this->load->view('insert_view', $data);
       		$this->load->view('footer');
       		}
    }    

     function form_insert_user($data){
 //Inserting in Table(students) of Database(college) 
 	 		$msg['query1']= $this->db->get('cook_reg');
            
            
            $qry1 = $this->db->query("select * from user_reg where user_email='".$data['user_email']."' order by user_id ");
            $qry2 = $this->db->query("select * from user_reg where user_mob='".$data['user_mob']."' order by user_id ");

            $msg['query1'] = $qry1->result();
            if($qry1->num_rows()>0 || $qry2->num_rows()>0)
			{
					if($qry1->num_rows()>0)
					{
					$data['message'] = 'Email Already Registered';
					}
					else
					{
					$data['message'] = 'Mobile Already Registered';	
					}

		            //Loading View
		           $this->load->view('insert_user', $data);
		           $this->load->view('footer');
							
			}
			else
			{
       		$this->db->insert('user_reg', $data);
       		$data['message'] = 'Registration Successful';  
       		$this->load->view('insert_user', $data);
       		$this->load->view('footer');
       		}
    }  

    function login_user($data){

    	$msg['query1']= $this->db->get('user_reg');
            
            //$rep= 'hell';
            //echo $data['pass'];
            $qry1 = $this->db->query("select * from user_reg where user_email='".$data['name']."' order by user_id ");
           $msg['query'] = $qry1->result();
            //echo $qry1->num_rows();
           if($qry1->num_rows()!=0)
           {
            foreach ($qry1->result() as $row)
				{
					//echo str_repeat('<br />', 1);
					//echo $row->user_fname;
					//echo $row->user_pass;
					
					if($this->bcrypt->check_password($data['pass'], $row->user_pass))
					{
						//$rep= 'Login Successful';
						
						$this->session->set_userdata('logged_in',array(
                            'username'      => $row->user_fname,
                            'email'       => $row->user_email,
                            'user_age'       => $row->user_age,
                            'user_mobile'       => $row->user_mob,
                            'user_about'       => $row->user_choice,
                            'status'        => TRUE
                    ));

						$data = array(
                            'username'      => $row->user_fname,
                            'email'       => $row->user_email,
                            'user_age'       => $row->user_age,
                            'user_mob'       => $row->user_mob,
                            'user_about'       => $row->user_choice);

						$this->load->view('cook_page',$data);
						//echo $row->cook_name;

					}
					else{
						redirect('login');
					}
				}
            }
            else
            {
                redirect('login');
					//echo $rep;
            }

    }  

    function login_cook($data){
    		$msg['query1']= $this->db->get('cook_reg');
            
            $qry1 = $this->db->query("select * from cook_reg where cook_email='".$data['name']."'  order by cook_id ");
            
            
            $msg['query'] = $qry1->result();
            if($qry1->num_rows()!=0)
            {
            foreach ($qry1->result() as $row)
				{
					
					//echo $row->cook_pass;
					
					if($this->bcrypt->check_password($data['pass'], $row->cook_pass))
					{
						$rep= 'Login Successful';
						
						//echo "welcome ";
						
						$this->session->set_userdata('logged_in',array(
                            'username'      => $row->cook_name,
                            'email'       => $row->cook_email,
                            'user_age'       => $row->cook_age,
                            'user_mobile'       => $row->cook_mob,
                            'user_about'       => $row->cook_about,
                            'status'        => TRUE
                    ));
						$data = array(
                            'username'      => $row->cook_name,
                            'email'       => $row->cook_email,
                            'user_age'       => $row->cook_age,
                            'user_mob'       => $row->cook_mob,
                            'user_about'       => $row->cook_about);

						$this->load->view('cook_page',$data);
						//echo $row->cook_name;
						//echo str_repeat('<br />', 2);
						
					}
					else{
						redirect('login');
						
					}
				}
            }
            else
            {
                redirect('login');
					//echo $rep;
            }
				

           /* if($qry1->num_rows()>0)
            {
            	echo 'Login Successful';
            }
            else
            {
            	echo 'Login Unsuccessful';
            }*/

    }

    function pic_upload($data)
    {
    	$this->db->get('pic_db');
    	foreach ($data as $item => $value)
    	{
    	 	$this->db->insert('pic_db',$value);
               
            
    	}
		//$this->db->insert('pic_db',$data);
    }/*<?php echo $item;?>: <?php echo $value;?>*/

    
   
}

?>		