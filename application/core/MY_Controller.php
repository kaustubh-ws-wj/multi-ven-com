<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        define("BASEURL", base_url());
        define("SITEURL", site_url());
        define("ASSETSURL", base_url('assets'));
        //define("USERASSETS", base_url() . "assets/");
        //changed by for user assets
        define("USERASSETS", base_url() . "assets/user/");
        define("ADMINASSETS", base_url()."assets/admin/");
        //define('ADMINIMGURL', base_url() . 'assets/admin/');
        define('IMGURL', base_url() . 'assets/img/');
        define('SITENAME', "");
        //$this->load->helper('xcrud');
        $this->load->model('Site_model', 'site_model');
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
        $this->loggedIn = $this->ion_auth->logged_in();
    }

    public function useradmin_layout($data) {
        if ($this->session->userdata('email') != "") {
            $temp['profile'] = $this->get_loginuser();
            $temp['data'] = $data;
            $this->load->view('user/layout/index', $temp);
        } else {
            redirect('');
        }
    }

    // function curlReq($url, $vars) {
    //     $curl_handle = curl_init();
    //     curl_setopt($curl_handle, CURLOPT_URL, $url);
    //     curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($curl_handle, CURLOPT_POST, 1);
    //     curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $vars);
    //     $buffer = curl_exec($curl_handle);
    //     curl_close($curl_handle);
    //     $object = json_decode($buffer);
    //     return $object;
    // }

    public function admin_layout($data) {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
        //$this->data['menus'] = $this->site_model->getMenus();
        //$this->data['pay'] = json_encode($this->site->getPayGetWay());
        $this->data['data'] = $data;
        $this->data['title'] = ucfirst($data['template']);
        $this->load->view('admin/layout/index', $this->data);
    }

    public function user_layout($data) {
        $temp['data'] = $data;
        $this->load->view('user/layout/index', $temp);
    }

    public function get_loginuser() {
        if (!empty($this->session->userdata['id'])) {
            $query = $this->db
                    ->select('*')
                    ->from('user_registration')
                    ->where('id', $this->session->userdata['id'])
                    ->get();
            return $query->result();
        } else {
            return FALSE;
        }
    }

// end here

    
    

    
    
    function sendMail($to, $sub, $msg, $from_name = "", $from = "info@.net") {

        $this->load->library('phpmailer/Pmailer');
        $mail = $this->pmailer->getMailer();

        $mail->setFrom("$from", "$from_name");
        $mail->addReplyTo("$from", "$from_name");

        $mail->addAddress($to);  // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "$sub";
        $mail->Body = "$msg";

        if (!$mail->send()) {
            return array('s' => 0, 'err' => $mail->ErrorInfo);
        } else {
            return array('s' => 1, 'err' => "");
        }
    }

}
