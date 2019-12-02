<?php
class Services_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    /////////GET NAME BY TABLE NAME AND ID/////////////
    function get_type_name_by_id($type, $type_id = '', $field = 'name')
    {
        if ($type_id != '') {
            $l = $this->db->get_where($type, array(
                //$type . '_id' => $type_id
                'id' => $type_id
            ));
            $n = $l->num_rows();
            if ($n > 0) {
                return $l->row()->$field;
            }
        }
    }
   /////////Filter One/////////////
   function filter_one($table, $type, $value)
   {
       $this->db->select('*');
       $this->db->from($table);
       $this->db->where($type, $value);
       return $this->db->get()->result_array();
   }
   
   // FILE_UPLOAD
   function img_thumb($type, $id, $ext = '.jpg', $width = '105', $height = '140')
   {
       $this->load->library('image_lib');
       ini_set("memory_limit", "-1");
       
       $config1['image_library']  = 'gd2';
       $config1['create_thumb']   = TRUE;
       $config1['maintain_ratio'] = TRUE;
       $config1['width']          = $width;
       $config1['height']         = $height;
       $config1['source_image']   = 'uploads/' . $type . '_image/' . $type . '_' . $id . $ext;
       
       $this->image_lib->initialize($config1);
       $this->image_lib->resize();
       $this->image_lib->clear();
   }
   
   // FILE_UPLOAD
   function file_up($name, $type, $id, $multi = '', $no_thumb = '', $ext = '.jpg')
   {
       if ($multi == '') {
           move_uploaded_file($_FILES[$name]['tmp_name'], 'uploads/' . $type . '_image/' . $type . '_' . $id . $ext);
           if ($no_thumb == '') {
               $this->Services_model->img_thumb($type, $id, $ext);
           }
       } elseif ($multi == 'multi') {
           $ib = 1;
           foreach ($_FILES[$name]['name'] as $i => $row) {
               $ib = $this->file_exist_ret($type, $id, $ib);
               move_uploaded_file($_FILES[$name]['tmp_name'][$i], 'uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $ib . $ext);
               if ($no_thumb == '') {
                   $this->Services_model->img_thumb($type, $id . '_' . $ib, $ext);
               }
           }
       }
   }
   
   // FILE_UPLOAD : EXT :: FILE EXISTS
   function file_exist_ret($type, $id, $ib, $ext = '.jpg')
   {
       if (file_exists('uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $ib . $ext)) {
           $ib = $ib + 1;
           $ib = $this->file_exist_ret($type, $id, $ib);
           return $ib;
       } else {
           return $ib;
       }
   }
   
   
   // FILE_VIEW
   function file_view($type, $id, $width = '100', $height = '100', $thumb = 'no', $src = 'no', $multi = '', $multi_num = '', $ext = '.jpg')
   {


    // echo "Hii";die;
       if ($multi == '') {
           if (file_exists('uploads/' . $type . '_image/' . $type . '_' . $id . $ext)) {
               if ($thumb == 'no') {
                   $srcl = base_url() . 'uploads/' . $type . '_image/' . $type . '_' . $id . $ext;
               } elseif ($thumb == 'thumb') {
                   $srcl = base_url() . 'uploads/' . $type . '_image/' . $type . '_' . $id . '_thumb' . $ext;
               }
               
               if ($src == 'no') {
                   return '<img src="' . $srcl . '" height="' . $height . '" width="' . $width . '" />';
               } elseif ($src == 'src') {
                   return $srcl;
               }
           }
           else{
               return base_url() . 'uploads/'. $type.'_image/default.jpg';
           }
           
       } else if ($multi == 'multi') {
           $num    = $this->Services_model->get_type_name_by_id($type, $id, 'num_of_imgs');
           //$num = 2;
           $i      = 0;
           $p      = 0;
           $q      = 0;
           $return = array();
           while ($p < $num) {
               $i++;
               if (file_exists('uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $i . $ext)) {
                   if ($thumb == 'no') {
                       $srcl = base_url() . 'uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $i . $ext;
                   } elseif ($thumb == 'thumb') {
                       $srcl = base_url() . 'uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $i . '_thumb' . $ext;
                   }
                   
                   if ($src == 'no') {
                       $return[] = '<img src="' . $srcl . '" height="' . $height . '" width="' . $width . '" />';
                   } elseif ($src == 'src') {
                       $return[] = $srcl;
                   }
                   $p++;
               } else {
                   $q++;
                   if ($q == 10) {
                       break;
                   }
               }
               
           }
           if (!empty($return)) {
               if ($multi_num == 'one') {
                   return $return[0];
               } else if ($multi_num == 'all') {
                   return $return;
               } else {
                   $n = $multi_num - 1;
                   unset($return[$n]);
                   return $return;
               }
           } else {
               if ($multi_num == 'one') {

                // echo"hi";die;
                   return base_url() . 'uploads/'. $type.'_image/default.jpg';
               } else if ($multi_num == 'all') {
                   return array(base_url() . 'uploads/'. $type.'_image/default.jpg');
               } else {
                   return array(base_url() . 'uploads/'. $type.'_image/default.jpg');
               }
           }
       }
   }
   
   
   // FILE_VIEW
   function file_dlt($type, $id, $ext = '.jpg', $multi = '', $m_sin = '')
   {
       if ($multi == '') {
           if (file_exists('uploads/' . $type . '_image/' . $type . '_' . $id . $ext)) {
               unlink("uploads/" . $type . "_image/" . $type . "_" . $id . $ext);
           }
           if (file_exists("uploads/" . $type . "_image/" . $type . "_" . $id . "_thumb" . $ext)) {
               unlink("uploads/" . $type . "_image/" . $type . "_" . $id . "_thumb" . $ext);
           }
           
       } else if ($multi == 'multi') {
           $num = $this->Services_model->get_type_name_by_id($type, $id, 'num_of_imgs');
           if ($m_sin == '') {
               $i = 0;
               $p = 0;
               while ($p < $num) {
                   $i++;
                   if (file_exists('uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $i . $ext)) {
                       unlink("uploads/" . $type . "_image/" . $type . "_" . $id . '_' . $i . $ext);
                       $p++;
                       $data['num_of_imgs'] = $num - 1;
                       $this->db->where('id', $id);
                       $this->db->update($type, $data);
                   }
                   
                   if (file_exists("uploads/" . $type . "_image/" . $type . "_" . $id . '_' . $i . "_thumb" . $ext)) {
                       unlink("uploads/" . $type . "_image/" . $type . "_" . $id . '_' . $i . "_thumb" . $ext);
                   }
                   if ($i > 50) {
                       break;
                   }
               }
           } else {
               if (file_exists('uploads/' . $type . '_image/' . $type . '_' . $id . '_' . $m_sin . $ext)) {
                   unlink("uploads/" . $type . "_image/" . $type . "_" . $id . '_' . $m_sin . $ext);
               }
               if (file_exists("uploads/" . $type . "_image/" . $type . "_" . $id . '_' . $m_sin . "_thumb" . $ext)) {
                   unlink("uploads/" . $type . "_image/" . $type . "_" . $id . '_' . $m_sin . "_thumb" . $ext);
               }
               $data['num_of_imgs'] = $num - 1;
               $this->db->where('id', $id);
               $this->db->update($type, $data);
           }
       }
   }
   
   //DELETE MULTIPLE ITEMS	
   function multi_delete($type, $ids_array)
   {
       foreach ($ids_array as $row) {
           $this->file_dlt($type, $row);
           $this->db->where($type . '_id', $row);
           $this->db->delete($type);
       }
   }
   
   //DELETE SINGLE ITEM	
   function single_delete($type, $id)
   {
       $this->file_dlt($type, $id);
       $this->db->where($type . '_id', $id);
       $this->db->delete($type);
   }
}
