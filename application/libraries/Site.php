<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site
 *
 * @author Pravinkumar
 */
class Site {

    var $ci = null;

    public function __get($var) {
        return get_instance()->$var;
    }

    public function __construct() {
        $this->ci = &get_instance();
    }

//put your code here
    function getIp() {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getUserId() {
        return $this->session->userdata('uid');
    }

    public function encryptPass($pass) {
        $salt = $this->config->item('salt');
        return md5($pass . $salt);
    }

    public function getWhere($table, $field = "*", $where = null, $flag = false) {
        $this->db->select($field);
        if (isset($where)) {
            $this->db->where($where);
        }
        $rs = $this->db->get($table);
        if ($rs->num_rows() > 0) {
            if ($flag) {
                return $rs->result();
            } else {
                return $rs;
            }
        } else {
            return false;
        }
    }

    public function getProfile() {
        $profile = $this->getWhere('register', '*', array('id' => $this->ci->session->userdata('uid')));
        $profile = $profile->result();
        $profile = $this->getJSONFilterd($profile);
        return $profile[0];
    }

    public function getPermission() {
        $privacy = $this->getWhere('permission_nuser', '*', array('user_id' => $this->ci->session->userdata('uid')));
        $privacy = $privacy->row();
        $privacy->academics = json_decode($privacy->academics);
        $privacy->workingAt = json_decode($privacy->workingAt);
        $privacy->achieved = json_decode($privacy->achieved);
        $privacy->sports = json_decode($privacy->sports);
        return $privacy;
    }

    public function minify($file) {
        $this->load->driver('minify');
        $pi = pathinfo($file);
        $bn = explode(".", $pi['basename']);
        $fp = fopen($pi['dirname'] . "/" . $bn[0] . ".min." . $bn[1], 'w');
        $data = $this->minify->js->min($file);
        fwrite($fp, $data, strlen($data));
        fclose($fp);
        return $pi['dirname'] . "/" . $bn[0] . ".min." . $bn[1];
    }

    public function getJSONFilterd($rs) {
        $rss = array();
        $pattern = '/\{(?:[^{}]|(?R))*\}/x';
        $i = 0;

        foreach ($rs as $r) {
            $rss[$i] = $r;
            $x = array_keys((array) $r);
            foreach ($x as $z) {
                if ($z != "prominent_guests") {
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

    public function getAffiliateIDGenrate() {
        $id = "CRIC-" . strtoupper(substr(md5(uniqid(rand(), true)), 0, 7));
        return $id;
    }

    public function getLevelOfId($id, $d) {
        $this->db->where('parent_user_id <> 0');
        $this->db->where(array('user_id' => $id));
        $dt = $this->db->get('affiliate');
        if ($dt->num_rows() > 0) {
            $d['level'] = $d['level'] + 1;
            array_push($d['parents'], $dt->row()->parent_user_id);
            return $this->getLevelOfId($dt->row()->parent_user_id, $d);
        } else {
//            $d['parents'] = array_reverse($d['parents']);
            return $d;
        }
    }

    public function giveWiningShare($id, $actualwinamt) {
        $leveldata = $this->getLevelOfId($id, array('level' => 0, 'parents' => array()));
        if ($leveldata['level'] != 0) {
            $i = 1;
            foreach ($leveldata['parents'] as $ld) {
                $al = $this->db->get_where('affiliate_per', array('id' => $i))->row();
                $userdata = $this->db->select('amount')->get_where('register', array('id' => $ld))->row();
                $share = 0.00;
                $share = (double) $actualwinamt * ((double) $al->percent / 100);
                $usershare = $userdata->amount + $share;
                $status = $this->db->update('register', array('amount' => $usershare), array('id' => $ld));
                $i++;
                if ($i > 10) {
                    break;
                }
            }
        }
    }

}
