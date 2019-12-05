<?php

class Home_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function register_user($register_data)
    {   
        if($this->db->insert('users', $register_data))
        {   
            $user_id = $this->db->insert_id();
            return $user_id; 
        }
        else{
            return false;
        }
    }

    public function register_vendor($register_data)
    {   
        if($this->db->insert('vendor', $register_data))
        {   
            $vendor_id = $this->db->insert_id();
            return $vendor_id; 
        }
        else{
            return false;
        }
    }

    public function get_login_details($email,$password)
    {   
        $login_details = $this->db->get_where('users',array('email'=>$email,'password'=>$password))->row();        
        return $login_details;
    }

    public function get_category_with_product_count(){
        $sql = 'SELECT category.id, category.category_name, COUNT(product.id) as product_count FROM category LEFT JOIN product ON category.id = product.category GROUP BY category.id';
        $result = $this->db->query($sql)->result_array();
        return $result;
    }

    function fetch_filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('product');
        $this->db->where('status', 'Active');
        return $this->db->get();
    }

    function make_query($minimum_price, $maximum_price)
    {
        $query = "
        SELECT * FROM product 
        WHERE status = 'Active' 
        ";

        if(isset($minimum_price, $maximum_price) && !empty($minimum_price) &&  !empty($maximum_price))
        {
        $query .= "
            AND sale_price BETWEEN '".$minimum_price."' AND '".$maximum_price."'
        ";
        }
        
        return $query;
    }

    function count_all($minimum_price, $maximum_price)
    {
        $query = $this->make_query($minimum_price, $maximum_price);
        $data = $this->db->query($query);
        return $data->num_rows();
    }

    function ajax_product_fetch_data($limit, $start, $minimum_price, $maximum_price)
    {
        $query = $this->make_query($minimum_price, $maximum_price);

        $query .= ' LIMIT '.$start.', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        if($data->num_rows() > 0)
        {
            foreach($data->result_array() as $row)
            {
                $prod_img = $this->Services_model->get_img_file('product',$row['id'],'','','no','src','multi','one');
                
                $output .="<div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"single-product shop-mar-bottom\">
                                    <div class=\"sale\">Sale</div>
                                    <div class=\"sale-border\"></div>
                                    <div class=\"new\">new</div>
                                    <div class=\"product-img-wrap\">
                                        <a class=\"product-img\" href=\"#\"> <img style=\"width:263px;height:347.92px;\" src=\"". $prod_img."\"></a>
                                        <div class=\"add-to-link\">
                                            <a href=\"#\">
                                                <div><i class=\"fa fa-heart\"></i><span>Add to Wishlist</span></div>
                                            </a>
                                            <a data-toggle=\"modal\" data-target=\"#productModal\" href=\"#\">
                                                <div><i class=\"fa fa-eye\"></i><span>Quick view</span></div>
                                            </a>
                                            <a href=\"#\">
                                                <div><i class=\"fa fa-random\"></i><span>Add to compare</span></div>
                                            </a>
                                        </div>
                                        <div class=\"add-to-cart\">
                                            <a href=\"#\" title=\"add to cart\">
                                                <div><i class=\"fa fa-shopping-cart\"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"product-info text-center\">
                                        <div class=\"product-content\">
                                            <a href=\"#\"><h3 class=\"pro-name\">".$row['title']."</h3></a>
                                            <div class=\"pro-rating\">
                                                <ul>
                                                    <li><i class=\"fa fa-star\"></i></li>
                                                    <li><i class=\"fa fa-star\"></i></li>
                                                    <li><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"r-grey\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"r-grey\"><i class=\"fa fa-star-half-o\"></i></li>
                                                </ul>
                                            </div>
                                            <div class=\"pro-price\">
                                                <span class=\"price-text\">Price:</span>
                                                <span class=\"normal-price\">".$row['sale_price']."</span>
                                                <span class=\"old-price\"><del>$220.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
            }
        }
        else
        {
            $output = '<h3>No Data Found</h3>';
        }
        return $output;
    }





}
