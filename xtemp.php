<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('cric_city');
echo Xcrud::load_css();
echo $xcrud->render();
?>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php echo Xcrud::load_js();
