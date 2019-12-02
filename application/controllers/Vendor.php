<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');   
        $this->load->model('Home_model');
        $this->load->model('Services_model');
    }

    public function dashboard()
    {
        $data['template'] = "vendor/dashboard";
        $data['name'] = "vendor/dashboard";
        $this->user_layout($data);
    }
    public function products($param1='',$param='')
    {   
        if($param1== 'add_product'){
            $this->db->select('id,category_name'); 
            $this->db->from('category');   
            $data['cat_data'] = $this->db->get()->result();
            $data['template'] = "vendor/add_product";
            $data['name'] = "vendor/add_product";
            $this->user_layout($data);    
        }else{
            $data['template'] = "vendor/product_list";
            $data['name'] = "vendor/product_list";
            $this->user_layout($data);
        }
        
    }

    /* Product add, edit, view, delete */
    function product($para1 = '', $para2 = '', $para3 = '')
    {
        if ($para1 == 'do_add') {
            //$options = array();
            if ($_FILES["images"]['name'][0] == '') {
                $num_of_imgs = 0;
            } else {
                $num_of_imgs = count($_FILES["images"]['name']);
            }
            $data['title']              = $this->input->post('title');
            $data['category']           = $this->input->post('category');
            $data['description']        = $this->input->post('description');
            $data['sub_category']       = $this->input->post('sub_category');
            $data['sale_price']         = $this->input->post('sale_price');
            //$data['purchase_price']     = $this->input->post('purchase_price');
            $data['created_date']       = time();
            $data['num_of_imgs']        = $num_of_imgs;
            $data['current_stock']      = $this->input->post('current_stock');
            $data['added_by']           = json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id')));
            
            $this->db->insert('product', $data);
            $id = $this->db->insert_id();
            $this->Services_model->file_up("images", "product", $id, 'multi');
            $this->session->set_flashdata('success', 'Product Added Successfully !');
            redirect('vendor/product');
            //$this->Services_model->set_category_data(0);
        } else if ($para1 == "update") {
            $options = array();
            if ($_FILES["images"]['name'][0] == '') {
                $num_of_imgs = 0;
            } else {
                $num_of_imgs = count($_FILES["images"]['name']);
            }
            $num                        = $this->Services_model->get_type_name_by_id('product', $para2, 'num_of_imgs');
            $data['title']              = $this->input->post('title');
            $data['category']           = $this->input->post('category');
            $data['description']        = $this->input->post('description');
            $data['sub_category']       = $this->input->post('sub_category');
            $data['sale_price']         = $this->input->post('sale_price');
            $data['current_stock']      = $this->input->post('current_stock');
            $data['num_of_imgs']        = $num + $num_of_imgs;
            $this->Services_model->file_up("images", "product", $para2, 'multi');
            $this->db->where('id', $para2);
            $this->db->update('product', $data);
            $this->session->set_flashdata('success', 'Product Updated Successfully !');
            redirect('vendor/product');

        } else if ($para1 == 'edit') {
            $data['product_data'] = $this->db->get_where('product', array(
                'id' => $para2
            ))->result_array();
            //print_r($data['product_data']);die;
            $data['template'] = "vendor/edit_product";
            $data['name'] = "vendor/edit_product";
            $this->user_layout($data);
        } else if ($para1 == 'view') {
             $data['product_data'] = $this->db->get_where('product', array(
                'id' => $para2
            ))->result_array(); 
            $data['template'] = "vendor/view_product";
            $data['name'] = "vendor/view_product";
            $this->user_layout($data);
        } else if ($para1 == 'delete') {
            $this->Services_model->file_dlt('product', $para2, '.jpg', 'multi');
            $this->db->where('id', $para2);
            $this->db->delete('product');
            $this->session->set_flashdata('success', 'Product Deleted Successfully !');
            redirect('vendor/product');
        } else if ($para1 == 'list') {
            $this->db->order_by('id', 'desc');
            $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id'))));
            $data['all_product'] = $this->db->get('product')->result_array();
            $data['template'] = "vendor/product_list";
            $data['name'] = "vendor/product_list";
            $this->user_layout($data);
        } else if ($para1 == 'list_data') {
            $limit      = $this->input->get('limit');
            $search     = $this->input->get('search');
            $order      = $this->input->get('order');
            $offset     = $this->input->get('offset');
            $sort       = $this->input->get('sort');
            if($search){
                $this->db->like('title', $search, 'both');
            }
            $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id'))));
            $total      = $this->db->get('product')->num_rows();
            $this->db->limit($limit);
            if($sort == ''){
                $sort = 'id';
                $order = 'DESC';
            }
            $this->db->order_by($sort,$order);
            if($search){
                $this->db->like('title', $search, 'both');
            }
            $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id'))));
            $products   = $this->db->get('product', $limit, $offset)->result_array();
            $data       = array();
            foreach ($products as $row) {

                $res    = array(
                             'image' => '',
                             'title' => '',
                             'sale_price' => '',
                             'current_stock' => '',
                             'options' => ''
                          );

                $res['image']  = '<img class="img-sm" style="height:auto !important; border:1px solid #ddd;padding:2px; border-radius:2px !important;" src="'.$this->Services_model->file_view('product',$row['id'],'105','140','thumb','src','multi','one').'"  />';
                $res['title']  = $row['title'];
                $res['sale_price']  = $row['sale_price'];
                
                if($row['current_stock'] > 0){ 
                    $res['current_stock']  = $row['current_stock'].'(s)';                     
                } else {
                    $res['current_stock']  = '<span class="label label-danger">out_of_stock</span>';
                }

                //add html for action
                $res['options'] = " <a data-toggle=\"tooltip\"  href=\"".base_url()."vendor/product/view/".$row['id']."\"
                                  data-original-title=\"View\" data-container=\"body\"><i class=\"fa fa-book\"></i>
                            </a>                            
                            <a data-toggle=\"tooltip\" href=\"".base_url()."vendor/product/edit/".$row['id']."\"
                                 data-original-title=\"Edit\" data-container=\"body\"><i class=\"fa fa-edit\"></i>
                            </a>                            
                            <a onclick=\"delete_confirm('".$row['id']."','really_want_to_delete_this?')\" href=\"".base_url()."vendor/product/delete/".$row['id']."\"
                                 data-toggle=\"tooltip\" data-original-title=\"Delete\" data-container=\"body\"><i class=\"fa fa-times\"></i>
                            </a>";
                $data[] = $res;
            }
            $result = array(
                             'total' => $total,
                             'rows' => $data
                           );

            echo json_encode($result);

        } else if ($para1 == 'dlt_img') {
            $a = explode('_', $para2);
            $this->Services_model->file_dlt('product', $a[0], '.jpg', 'multi', $a[1]);
            //recache();
        } else if ($para1 == 'add') {

          
            // print_r($data['cat_data']);die;
            $data['template'] = "vendor/add_product";
            $data['name'] = "vendor/add_product";
            $this->user_layout($data);
        } else {
            //$page_data['page_name']   = "product";
            $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id'))));
            $data['all_product'] = $this->db->get('product')->result_array();
            $data['template'] = "vendor/product_list";
            $data['name'] = "vendor/product_list";
            $this->user_layout($data);
        }
    }

    
    public function orders()
    {
        $data['template'] = "vendor/orders";
        $data['name'] = "vendor/orders";
        $this->user_layout($data);
    }
    public function sales()
    {
        $data['template'] = "vendor/sales";
        $data['name'] = "vendor/sales";
        $this->user_layout($data);
    }
    public function settings()
    {
        $data['template'] = "vendor/settings";
        $data['name'] = "vendor/settings";
        $this->user_layout($data);
    }
    





}