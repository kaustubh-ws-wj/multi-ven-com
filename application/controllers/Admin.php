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
        $this->load->model('Services_model');
    }

    public function index()
    {
        $this->data['template'] = "dashboard";
        
        $this->admin_layout($this->data);
    }

    /*Product Category add, edit, view, delete */
    function category($para1 = '', $para2 = '')
    {
        
        if ($para1 == 'do_add') {
            $data['category_name'] = $this->input->post('category_name');
            $this->db->insert('category', $data);
            $id = $this->db->insert_id();			
        } else if ($para1 == 'edit') {
            $data['category_data'] = $this->db->get_where('category', array(
                'id' => $para2
            ))->result_array();
            $data['template'] = "category_edit";
            $data['name'] = "category_edit";
            $this->admin_layout($data);
            
        } elseif ($para1 == "update") {
            $data['category_name'] = $this->input->post('category_name');
            $this->db->where('id', $para2);
            $this->db->update('category', $data);
			recache();
        } elseif ($para1 == 'delete') {
			$this->db->where('id', $para2);
            $this->db->delete('category');
			recache();
        } elseif ($para1 == 'list') {
            $this->db->order_by('id', 'desc');
            $data['all_categories'] = $this->db->get('category')->result_array();
            $data['template'] = "category_list";
            $data['name'] = "category_list";
            $this->admin_layout($data);
			
        } elseif ($para1 == 'add') {
            $data['template'] = "category_add";
            $data['name'] = "category_add";
            $this->admin_layout($data);
          
        } else {
            $data['template']    = "category_list";
            $data['name'] = "category_add";
            //$data['all_categories'] = $this->db->get('category')->result_array();
            $this->admin_layout($data);
            
        }
    }

    
}

/* End of file Admin.php */
