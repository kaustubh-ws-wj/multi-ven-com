<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->model('site_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

    public function index()
    {
        $this->data['template'] = "dashboard";
        
        $this->admin_layout($this->data);
    }


}

/* End of file Admin.php */
