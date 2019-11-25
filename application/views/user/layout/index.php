<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html class="no-js" lang="en">
    <?php $this->load->view('user/layout/head'); ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!--Start-Preloader-area-->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one home-6"></div>
                    <div class="object object_two home-6"></div>
                    <div class="object object_three home-6"></div>
                </div>
            </div>
        </div>
        <!--end-Preloader-area-->
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="page-1">
        <?php $this->load->view('user/layout/header'); ?>
        <?php $this->load->view('user/layout/content', $data); ?>
        <?php $this->load->view('user/layout/footer'); ?>
        <?php include 'script.php'; ?>
    </body>
</html>