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
    function category($para1 = '', $para2 = '', $para3 = '')
    {
         if ($para1 == 'do_add') {
            $data['category_name'] = $this->input->post('category_name');
            $data['description']        = $this->input->post('description');
            //$data['purchase_price']     = $this->input->post('purchase_price');
            $data['created_date']       = time();
            // $data['added_by']           = json_encode(array('type'=>'admin','id'=>$this->session->userdata('user_id')));
            $data['status']             = $this->input->post('status');
            $this->db->insert('category', $data);
            $id = $this->db->insert_id();
            $this->session->set_flashdata('success', 'Category Added Successfully !');
            redirect('admin/category');
            //$this->Services_model->set_category_data(0);
        // } else if ($para1 == "update") {
        //     $data['category_name']      = $this->input->post('category_name');
        //     $data['description']        = $this->input->post('description');
        //     $data['updated_date']       = time();
        //     $data['status']             = $this->input->post('status');
        //     $this->db->where('id', $para2);
        //     $this->db->update('category', $data);
        //     $this->session->set_flashdata('success', 'Category Updated Successfully !');
        //     redirect('admin/category');		
    } else if ($para1 == "update") {
        $data['category_name'] = $this->input->post('category_name');
        $data['description']        = $this->input->post('description');
        $data['updated_date']       = time();
        $data['status']             = $this->input->post('status');
        $this->db->where('id', $para2);
        $this->db->update('category', $data);
        $this->session->set_flashdata('success', 'Category Updated Successfully !');
        redirect('admin/category');	
    } else if ($para1 == 'edit') {
            $data['category_data'] = $this->db->get_where('category', array(
                'id' => $para2
            ))->result_array();
            $data['template'] = "category_edit";
            $data['name'] = "category_edit";
            $this->admin_layout($data);
    } else if ($para1 == 'delete') {
			$this->db->where('id', $para2);
            $this->db->delete('category');
            redirect('admin/category');	
			// recache();
    } else if ($para1 == 'list') {
            $action =  "<a href=\"".base_url()."admin/category/edit/$1\" class=\"btn btn-light\">
            <i class=\"icon-pencil text-success\"></i>
            </a>
            <a href=\"".base_url()."admin/category/delete/$1\" class=\"btn btn-light delete_confirm\" >
            <i class=\"icon-close text-danger\"></i>
            </a>";
            $this->datatables
                    ->select("id,category_name,description,status")
                    ->from('category');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
	} else if ($para1 == 'add') {

            $data['template'] = "category_add";
            $data['name'] = "category_add";
            $this->admin_layout($data);
    } else if ($para1 == 'set_status'){
            $key =      $_POST['key'];
            $id  =      $_POST['id'];
            $table =    $_POST['tab'];
            $r = $this->site_model->setStatus($key, $id, $table);
            if ($r) {
                echo json_encode(array('status' => 1));
            } else {
                echo json_encode(array('status' => 0));
            }
    } else if ($para1 == 'bulk_delete'){
            $key = $_POST['key'];
            $val = $_POST['val'];
            $table = $_POST['tab'];
            $r = $this->site_model->bulkDelete($key, $val, $table);
            if ($r) {
                echo json_encode(array('status' => 1));
            } else {
                echo json_encode(array('status' => 0));
            }
        } else if ($para1 == 'get_th_img'){
            $id  =      $_POST['id'];
            $table =    $_POST['tab'];
            $r = $this->Services_model->file_view('product',$id,'','','thumb','src','multi','one');
    } else {
            $data['template']  = "category_list";
            $data['name'] = "category_list";
            //$data['all_categories'] = $this->db->get('category')->result_array();
            $this->admin_layout($data);
            
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
            $data['added_by']           = json_encode(array('type'=>'admin','id'=>$this->session->userdata('user_id')));
            $data['status']             = $this->input->post('status');
            $this->db->insert('product', $data);
            $id = $this->db->insert_id();
            $this->Services_model->file_up("images", "product", $id, 'multi');
            $this->session->set_flashdata('success', 'Product Added Successfully !');
            redirect('admin/product');
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
            $data['updated_date']       = time();
            $data['status']             = $this->input->post('status');
            $this->Services_model->file_up("images", "product", $para2, 'multi');
            $this->db->where('id', $para2);
            $this->db->update('product', $data);
            $this->session->set_flashdata('success', 'Product Updated Successfully !');
            redirect('admin/product');

        } else if ($para1 == 'edit') {
            $data['product_data'] = $this->db->get_where('product', array(
                'id' => $para2
            ))->result_array();
            //print_r($data['product_data']);die;
            $data['template'] ="product_edit";
            $data['name'] ="product_edit";
            $this->admin_layout($data);
        } else if ($para1 == 'view') {
           $data['product_data'] = $this->db->get_where('product', array(
                'id' => $para2
            ))->result_array(); 
            $data['template'] ="product_view";
            $data['name'] ="product_view";
            $this->admin_layout($data);
        } else if ($para1 == 'delete') {
            $this->Services_model->file_dlt('product', $para2, '.jpg', 'multi');
            $this->db->where('id', $para2);
            $this->db->delete('product');
            $this->session->set_flashdata('success', 'Product Deleted Successfully !');
            redirect('admin/product');
        } else if ($para1 == 'list') {

            $action =  "<a href=\"".base_url()."admin/product/view/$1\" class=\"btn btn-light\">
            <i class=\"icon-eye text-primary\"></i>
            </a>
            <a href=\"".base_url()."admin/product/edit/$1\" class=\"btn btn-light\">
            <i class=\"icon-pencil text-success\"></i>
            </a>
            <a href=\"".base_url()."admin/product/delete/$1\" class=\"btn btn-light delete_confirm\" >
            <i class=\"icon-close text-danger\"></i>
            </a>";
            $this->datatables
                    ->select("id,num_of_imgs,title,sale_price,current_stock,category,status")
                    ->from('product');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
            
        } else if ($para1 == 'add') {
            // $this->db->order_by('id', 'desc');
            // $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id'))));
            // $data['all_product'] = $this->db->get('product')->result_array();
            // $query = $this->db->select('id,category_name')->from('category');

            // $data['cat_data'] = $query->result();
            
            $this->db->select('id,category_name'); 
            $this->db->from('category');   
            $data['cat_data'] = $this->db->get()->result();
            
            $data['template'] ="product_add";
            $data['name'] ="product_add";
            $this->admin_layout($data);
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
        } else if ($para1 == 'set_status'){
            $key =      $_POST['key'];
            $id  =      $_POST['id'];
            $table =    $_POST['tab'];
            $r = $this->site_model->setStatus($key, $id, $table);
            if ($r) {
                echo json_encode(array('status' => 1));
            } else {
                echo json_encode(array('status' => 0));
            }
        } else if ($para1 == 'bulk_delete'){
            $key = $_POST['key'];
            $val = $_POST['val'];
            $table = $_POST['tab'];
            $r = $this->site_model->bulkDelete($key, $val, $table);
            if ($r) {
                echo json_encode(array('status' => 1));
            } else {
                echo json_encode(array('status' => 0));
            }
        } else if ($para1 == 'get_th_img'){
            $id  =      $_POST['id'];
            //$table =    $_POST['tab'];
            $r = $this->Services_model->file_view('product',$id,'','','thumb','src','multi','one');
            if ($r) {
                echo json_encode(array('status' => 1,'img'=>$r));
            } else {
                echo json_encode(array('status' => 0));
            }
        // }else if ($para1 == 'add') {
        //     $data['template'] ="product_add";
        //     $data['name'] ="product_add";
        //     $this->admin_layout($data);
        } else {
            //$page_data['page_name']   = "product";
            //$this->db->where('added_by',json_encode(array('type'=>'admin','id'=>$this->session->userdata('vendor_id'))));
            //$data['all_product'] = $this->db->get('product')->result_array();
            $data['template'] ="product_list";
            $data['name'] ="product_list";
            $this->admin_layout($data);
        }

        
    }


    /* Vendor Management */
    function vendor($para1 = '', $para2 = '', $para3 = '')
    {
        if ($para1 == 'delete') {
            /* delete vendor products start */
            $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$para2)));
            $products = $this->db->get('product')->result_array();
            $ids= array();
            foreach($products as $row){
                $this->Services_model->file_dlt('product',$row['id'], '.jpg', 'multi');
                $this->db->where('id', $row['id']);
                $this->db->delete('product');
            }
            /* delete vendor products end */
			$this->db->where('id', $para2);
            $this->db->delete('vendor');
            recache();
        } else if ($para1 == 'list') {
            $action =  "<a href=\"".base_url()."admin/vendor/view/$1\" class=\"btn btn-light\">
            <i class=\"icon-eye text-primary\"></i>
            </a>
            <a href=\"".base_url()."admin/vendor/edit/$1\" class=\"btn btn-light\">
            <i class=\"icon-pencil text-success\"></i>
            </a>
            <a href=\"".base_url()."admin/vendor/delete/$1\" class=\"btn btn-light delete_confirm\" >
            <i class=\"icon-close text-danger\"></i>
            </a>";
            $this->datatables
                    ->select("id,user_id,vendor_type,first_name,last_name,email")
                    ->from('vendor');
            $this->datatables->add_column("Actions", $action, "id");

            echo $this->datatables->generate();
            // $this->db->order_by('id', 'desc');
            // $data['all_vendors'] = $this->db->get('vendor')->result_array();
            // $data['template'] ="vendor_list";
            // $data['name'] ="vendor_list";
            // $this->admin_layout($data);
          
        } else if ($para1 == 'view') {

            
            $data['vendor_data'] = $this->db->get_where('vendor', array(
                'id' => $para2
            ))->result_array();

            // print_r( $data['vendor_data'][0]->);die;
            // print_r($this->session->all_userdata());die;
            $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$para2)));
            $total      = $this->db->get('product');
            $data['product_data'] = $total->result();
            
            // echo "<pre>";
            // print_r( $data['product_data']);die;
            $data['template'] ="vendor_view";
            $data['name'] ="vendor_view";

            
            $this->admin_layout($data);
    //     } else if ($para1 == 'add') {
    //         // $this->db->order_by('id', 'desc');
    //         // $this->db->where('added_by',json_encode(array('type'=>'vendor','id'=>$this->session->userdata('vendor_id'))));
    //         // $data['all_product'] = $this->db->get('product')->result_array();
    //         // $query = $this->db->select('id,category_name')->from('category');

    //         // $data['cat_data'] = $query->result();
            
    //         $this->db->select('id,vendor_type'); 
    // $this->db->from('vendor');   
    // $data['ven_data'] = $this->db->get()->result();
    //         // print_r($data['cat_data']);
    //         $data['template'] ="vendor_add";
    //         $data['name'] ="vendor_add";
    //         $this->admin_layout($data);
        
        } else if ($para1 == 'approval_set') {
            $vendor = $para2;
			$approval = $this->input->post('approval');
            if ($approval == 'ok') {
                $data['status'] = 'approved';
            } else {
                $data['status'] = 'pending';
            }
            $this->db->where('id', $vendor);
            $this->db->update('vendor', $data);
            // recache();
        } else { 
            $data['all_vendors'] = $this->db->get('vendor')->result_array();
            $data['template'] ="vendor_list";
            $data['name'] ="vendor_list";
            $this->admin_layout($data);
        }
    }

    public function getProductdata() {
        $action =  "<a href=\"".base_url()."admin/product/view/$1\" class=\"btn btn-light\">
                    <i class=\"icon-eye text-primary\"></i>
                    </a>
                    <a href=\"".base_url()."admin/product/edit/$1\" class=\"btn btn-light\">
                    <i class=\"icon-pencil text-success\"></i>
                    </a>
                    <a  class=\"btn btn-light delete_confirm\" data-id=\"".$row['id']."\">
                    <i class=\"icon-close text-danger\"></i>
                    </a>";
        $this->datatables
                ->select("id,title,description,sale_price,current_stock,status")
                ->from('product');
        $this->datatables->add_column("Actions", $action, "id");
        echo $this->datatables->generate();
        
    }
}

/* End of file Admin.php */
