<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site_model
 *
 * @author Neeta
 */
class Site_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

    public function bulkDelete($key, $id, $table) {
        foreach ($id as $i) {
            $r = $this->db->delete($table, array($key => $i));
        }
        return $r;
    }

    public function getMenus() {
        $rss = array();
        $usz = array();
        if ($this->session->userdata('group_id') != 1) {
            $us = $this->db->select('menu_ids')->get_where('group_alloc', array('group_id' => $this->session->userdata('group_id')))->row();
            if (!empty($us)) {
                $usx = json_decode($us->menu_ids, true);
                foreach ($usx as $u) {
                    $i = explode(":", $u);
                    $usz[] = $i[1];
                }
            }
        }

        $this->db->where('parent_id', 0);
        $this->db->where('status', 'Active');
        if (!empty($usz)) {
            $this->db->where_in('id', $usz);
        }
        $this->db->order_by('order', 'asc');
        $rs = $this->db->get('admin_menu')->result();
        $i = 0;
        foreach ($rs as $r) {
            $rss[$i] = $r;
            $this->db->where('parent_id', $r->id);
            $this->db->where('status', 'Active');
            if (!empty($usz)) {
                $this->db->where_in('id', $usz);
            }
            $this->db->order_by('order', 'asc');
            $rss[$i++]->nodes = $this->db->get('admin_menu')->result();
        }
        return $rss;
    }

    public function setOrder($key, $id, $table, $order) {
        $ix = 0;
        $i = $this->db->select("id,$key")->get_where($table, array($key => $order));
        if ($i->num_rows() > 0) {
            $ix = $i->row()->id;
            $x = $this->db->select($key)->get_where($table, array("id" => $id))->row()->{$key};
            $r = $this->db->update($table, array($key => $x), array('id' => $ix));
            $r = $this->db->update($table, array($key => $order), array('id' => $id));
        } else {
            $r = $this->db->update($table, array($key => $order), array('id' => $id));
        }
        return $r;
    }

//    public function getAllocMenus($id) {
//        $rss = $this->db->get_where('menu_alloc', array('admin_id' => $id))->row();
//        return $rss;
//    }

    public function setStatus($key, $id, $table) {
        $status1 = $this->db->select('status')->from($table)->where($key, $id)->get()->row()->status;
        $status = ($status1 == 'Active') ? 'Deactive' : 'Active';
        $r = $this->db->update($table, array('status' => $status), array($key => $id));
        return $r;
    }

    public function setUStatus($key, $id, $table) {
        $status1 = $this->db->select('active')->from($table)->where($key, $id)->get()->row()->active;
        $status = ($status1 == 1) ? 0 : 1;
        $r = $this->db->update($table, array('active' => $status), array($key => $id));
        return $r;
    }

    public function getGroups() {
        return $this->getResult($this->db->select('id,name')->get('groups'));
    }

    public function getGroupsAllDetails($id) {
        return $this->getResult($this->db->get_where('groups', array('id' => $id)));
    }

    public function getSubject() {
        return $this->getResult($this->db->select('sub_id,sub_name')->get('rs_subjects_1423552512'));
    }

    public function saveUserGroup($data) {
        if ($this->db->insert('groups', $data)) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function getUser($id) {
        return $this->getResult($this->db->get_where('system_users', array('id' => $id)));
    }

    public function getAdminMenus() {
        return $this->getResult($this->db->select('id,name')->get_where('admin_menu', array('parent_id' => 0)));
    }

    public function getAdminMenu($id) {
        return $this->getResult($this->db->get_where('admin_menu', array('id' => $id)));
    }

    public function saveSystemUser($data) {
        if ($this->db->insert('system_users', $data)) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function saveMenu($data) {
        if ($this->db->insert('admin_menu', $data)) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function saveJob($data) {
        if ($this->db->insert('rs_job', $data)) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function updateSystemUser($data, $id) {
        if ($this->db->update('system_users', $data, array('id' => $id))) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function updateAdminMenu($data, $id) {
        if ($this->db->update('admin_menu', $data, array('id' => $id))) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function updateUserGroup($data, $id) {
        if ($this->db->update('groups', $data, array('id' => $id))) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function saveSystemUserMenuAlloc($data) {
        if ($this->db->select('admin_id')->get_where('menu_alloc', array('admin_id' => $data['admin_id']))->num_rows()) {
            $id = $data['admin_id'];
            unset($data['admin_id']);
            $data['menu_ids'] = json_decode($data['menu_ids'], true);
            $data['menu_ids'] = array_filter($data['menu_ids']);
            $data['menu_ids'] = array_unique($data['menu_ids']);
            $data['menu_ids'] = json_encode($data['menu_ids']);
            if ($this->db->update('menu_alloc', $data, array('admin_id' => $id))) {
                return TRUE;
            } else {
                return false;
            }
        } else {
            if ($this->db->insert('menu_alloc', $data)) {
                return TRUE;
            } else {
                return false;
            }
        }
    }

    public function view($id, $table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getAllocMenus($id) {
        $rss = $this->db->get_where('group_alloc', array('group_id' => $id))->row();
        return $rss;
    }

    public function saveSystemGroupMenuAlloc($data) {
        if ($this->db->select('group_id')->get_where('group_alloc', array('group_id' => $data['group_id']))->num_rows()) {
            $id = $data['group_id'];
            unset($data['group_id']);
            $data['menu_ids'] = json_decode($data['menu_ids'], true);
            $data['menu_ids'] = array_filter($data['menu_ids']);
            $data['menu_ids'] = array_unique($data['menu_ids']);
            $data['menu_ids'] = json_encode($data['menu_ids']);
            $data['modify_by'] = $this->session->userdata('user_id');
            $data['created_by'] = $this->session->userdata('user_id');
            $data['create_date'] = date('Y-m-d h:i:s');
            $data['modify_date'] = date('Y-m-d h:i:s');
            if ($this->db->update('group_alloc', $data, array('group_id' => $id))) {
                return TRUE;
            } else {
                return false;
            }
        } else {
            if ($this->db->insert('group_alloc', $data)) {
                return TRUE;
            } else {
                return false;
            }
        }
    }

}
