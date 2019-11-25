<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');   
        $this->load->model('Home_model');
    }

    public function index() {
        $data['template'] = "home";
        $data['name'] = "home";
        $this->user_layout($data);
    }

    public function login($parm1='')
    {   
        if($this->session->userdata('user_login') == 'yes'){
            $this->index();
        }
        if($parm1 == 'do_login'){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $login_result = $this->Home_model->get_login_details($email,$password);
            
            if(!empty($login_result)){
                
                $session_array = array(
                    'user_name' => $login_result->first_name.' '.$login_result->last_name,
                    'email' => $login_result->email,
                    'user_login' => 'yes',
                    'is_vendor' => $login_result->is_vendor
                );
                if($login_result->is_vendor == 'yes'){
                    $vendor = $this->db->get_where('vendor',array('user_id'=>$login_result->id))->row();
                    $session_array ['vendor_id'] = $vendor->id;
                    $session_array ['vendor_type'] = $vendor->vendor_type;
                }
                
                $this->session->set_userdata($session_array);
                
                $this->session->set_flashdata('success', 'Logged In Successfully !');
                redirect('home');
            }else{
                $this->session->set_flashdata('error', 'Invalid Email Or Password !');
                redirect('home/login');
            }
        }else{
            $data['template'] = "login";
            $data['name'] = "login";
            $this->user_layout($data);
        }
    }

    public function register($param1="")
    { 
        if($param1 == ""){
            $data['template'] = "register";
            $data['name'] = "register";
            $this->user_layout($data);
        }
        if($param1 == "do_register"){
            
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user_type = $this->input->post('cust_type');
            $is_vendor = ($user_type == 'vendor')? 'yes' : 'no';
            $register_data = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password'=> $password,
                'is_vendor' => $is_vendor,
                'created_date' => time()
            );
            if($is_vendor == 'yes'){
                $register_data['vendor_type'] = $this->input->post('vendor_type');
            }
            $register_result=$this->Home_model->register_user($register_data);
            if($is_vendor == 'yes'){
                $vendor_register_data = array(
                    'user_id' => $register_result,
                    'vendor_type' =>$this->input->post('vendor_type'),
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'password'=> $password,
                    'created_date' => time()
                );
                $register_vendor_result=$this->Home_model->register_vendor($vendor_register_data);
            }
            if($register_result > 0){
                $this->session->set_flashdata('success', 'You are registerd successfully!');
                redirect('home');
            }else{
                $this->session->set_flashdata('error', 'Registration failed !');
            }
        }
        
    }

    public function logout()
    {   
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('email');
        $this->session->set_userdata('user_login','no');
        $this->session->unset_userdata('is_vendor');
        if(isset($_SESSION['vendor_id'])){
            $this->session->unset_userdata('vendor_id');
        }
        $this->session->set_flashdata('success', 'Logged out Successfully !');
        redirect('home');
    }
    
    public function checkEmailAlreadyExist()
    {
        $email = $this->input->post('email');
        $count = $this->db->get_where('users',array('email'=>$email))->num_rows();
        $exists = 'no';
        
            if ($count > 0) {
                $exists = 'yes';
            }
        
        echo $exists;
    }

    public function my_account()
    {
        if(isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'yes')){
            $data['template'] = "my_account";
            $data['name'] = "my_account";
            $this->user_layout($data);
        }else{
            redirect('home/login');
        }
    }

    public function my_orders()
    {
        if(isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'yes')){
            $data['template'] = "my_orders";
            $data['name'] = "my_orders";
            $this->user_layout($data);
        }else{
            redirect('home/login');
        }
    }

    public function my_invoices()
    {
        if(isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'yes')){
            $data['template'] = "my_invoices";
            $data['name'] = "my_invoices";
            $this->user_layout($data);
        }else{
            redirect('home/login');
        }
    }

    public function my_profile()
    {
        if(isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'yes')){
            $data['template'] = "my_profile";
            $data['name'] = "my_profile";
            $this->user_layout($data);
        }else{
            redirect('home/login');
        }
    }

}
