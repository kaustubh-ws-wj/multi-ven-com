<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/layout/head'); ?>
    <body>
        <div class="container-scroller">
        <?php $this->load->view('admin/layout/navbar'); ?>
        <div class="main-panel">
        <?php $this->load->view('admin/layout/content',$data); ?>
        <?php $this->load->view('admin/layout/footer'); ?>
    </body>
</html>