<?php
$date = date("Y-m-d");
$group_id = $this->session->userdata('group_id');
?>

<style>
    .my-class{
        margin: 21px;
    }
    div.alert-message {
        display: block;
        padding: 13px 12px 12px;
        font-weight: bold;
        font-size: 14px;
        color: white;
        background-color: #2ba6cb;
        border: 1px solid rgba(0, 0, 0, 0.1);
        margin-bottom: 12px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
        position: relative;
    }
    div.alert-message .box-icon {
        display: block;
        float: left;
        background-image: url('icon.png');
        width: 30px;
        height: 25px;
        margin-top: -2px;
        background-position: -8px -8px;
    }
    div.alert-message p {
        margin: 0px;
    }
    div.alert-message.success {
        background-color: #5da423;
        color: #fff;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
    }
    div.alert-message.success .box-icon {
        background-position: -48px -8px;
    }
    div.alert-message.warning {
        background-color: #e3b000;
        color: #fff;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
    }
    div.alert-message.warning .box-icon {
        background-position: -88px -8px;
    }
    div.alert-message.error {
        background-color: #c60f13;
        color: #fff;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
    }
    div.alert-message.error .box-icon {
        background-position: -128px -8px;
    }
    div.alert-message a.close {
        color: #333;
        position: absolute;
        right: 4px;
        top: -1px;
        font-size: 17px;
        opacity: 0.2;
        padding: 4px;
    }
    div.alert-message a.close:hover, div.alert-box a.close:focus {
        opacity: 0.4;
    }
</style>

<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
        <?php $this->load->view('admin/layout/breadcrumb'); ?>
        <!--dashboard for admin-->
        <div class="my-class">
            <?php if (!empty($this->data['notification'][0])) { ?>
                <div class="alert-message info">
                    <div class="box-icon"></div>
                    <?php
                    $mydate = strtotime($this->data['notification'][0]->create_date);
                    ?>
                    <p><?php echo $this->data['notification'][0]->fname . ' Have betted ' . $this->data['notification'][0]->bet_amount . '<i class="fa fa-bitcoin fa-2x" style="color:#FFFFFF; font-size: 15px;"></i> on ' . date("j M Y G:i", $mydate); ?><a href="" class="close">&times;</a>
                </div>
                <?php
            } else {
                echo '<div class="alert-message info"><div class="box-icon"></div><p>No Current Notificatin</p></div>';
            }
            ?>
            <?php if (!empty($this->data['notification'][1])) : ?>
                <div class="alert-message success">
                    <div class="box-icon"></div>
                    <?php
                    $mydate = strtotime($this->data['notification'][1]->create_date);
                    ?>
                    <p><?php echo $this->data['notification'][1]->fname . ' Have betted ' . $this->data['notification'][1]->bet_amount . '<i class="fa fa-bitcoin fa-2x" style="color:#FFFFFF; font-size: 15px;"></i> on ' . date("j M Y G:i", $mydate); ?><a href="" class="close">&times;</a>
                </div>
            <?php endif; ?>
            <?php if (!empty($this->data['notification'][2])) : ?>
                <div class="alert-message warning">
                    <div class="box-icon"></div>
                    <?php
                    $mydate = strtotime($this->data['notification'][2]->create_date);
                    ?>
                    <p><?php echo $this->data['notification'][2]->fname . ' Have betted ' . $this->data['notification'][2]->bet_amount . '<i class="fa fa-bitcoin fa-2x" style="color:#FFFFFF; font-size: 15px;"></i> on ' . date("j M Y G:i", $mydate); ?><a href="" class="close">&times;</a>
                </div>
            <?php endif; ?>
            <?php if (!empty($this->data['notification'][3])) : ?>
                <div class="alert-message error">
                    <div class="box-icon"></div>
                    <?php
                    $mydate = strtotime($this->data['notification'][3]->create_date);
                    ?>
                    <p><?php echo $this->data['notification'][3]->fname . ' Have betted ' . $this->data['notification'][3]->bet_amount . '<i class="fa fa-bitcoin fa-2x" style="color:#FFFFFF; font-size: 15px;"></i> on ' . date("j M Y G:i", $mydate); ?><a href="" class="close">&times;</a>
                </div>
            <?php endif; ?>
        </div>
        <!--subject details-->

        <?php $this->load->view('admin/layout/footer'); ?>
    </div>

    <div class="clearfix"></div>
</div>
<script>
    $("document").ready(function() {

    });

</script>