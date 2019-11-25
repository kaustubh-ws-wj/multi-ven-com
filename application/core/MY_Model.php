<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Model
 *
 * @author Pravinkumar
 */
class MY_Model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function getWhere($table, $field = "*", $where = null, $limit = null) {
        $this->db->select($field);
        if (isset($where)) {
            $this->db->where($where);
        }
        if (!is_null($limit)) {
            if (is_array($limit)) {
                $this->db->limit($limit[1], $limit[0]);
            } else {
                $this->db->limit($limit);
            }
        }
        $rs = $this->db->get($table);
        if ($rs->num_rows() > 0) {
            return $rs;
        } else {
            return false;
        }
    }

    public function getResult($data) {
        if ($data->num_rows() > 0) {
            return $data->result();
        } else {
            return false;
        }
    }

    public function getJSONFilterd($rs) {
        $rss = array();
        $pattern = '/\{(?:[^{}]|(?R))*\}/x';
        $i = 0;
        foreach ($rs as $r) {
            $rss[$i] = $r;
            $x = array_keys((array) $r);
            foreach ($x as $z) {
                if ($z != "prominent_guests" && $z != "bookmarks") {
                    if (preg_match($pattern, $r->{$z})) {
                        $rss[$i]->{$z} = json_decode($r->{$z});
                    }
                } else {
                    $rss[$i]->{$z} = json_decode($r->{$z});
                }
            }
            $i++;
        }
        return $rss;
    }

    public function getDateFilterd($rs) {
        $rss = array();
        $i = 0;
        $date_regex = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])[\ \/.](0[0-9]|[12][0-3])[\:\/.](0[0-9]|[12345][0-9])[\:\/.](0[0-9]|[12345][0-9])$/';
        foreach ($rs as $r) {
            $rss[$i] = $r;
            $x = array_keys((array) $r);
            foreach ($x as $z) {
                if (is_array($rss[$i]->{$z}) || is_object($rss[$i]->{$z})) {
                    $rss[$i]->{$z} = $this->getDateFilterd($rss[$i]->{$z});
                } else {
                    if (preg_match($date_regex, $rss[$i]->{$z})) {
                        $rss[$i]->{$z} = microtime($rss[$i]->{$z});
                    }
                }
            }
            $i++;
        }
        return $rss;
    }

    //    added by kavita @12-22-16 for login user data
    public function get_loginuser() {
        if (!empty($this->session->userdata['email'])) {
            $query = $this->db
                    ->select('*')
                    ->from('register')
                    ->where('email', $this->session->userdata['email'])
                    ->get();
            return $query->row();
        } else {
            return FALSE;
        }
    }

//    end here
}
