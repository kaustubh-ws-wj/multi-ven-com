<!--<script src="https://code.jquery.com/jquery-1.12.3.js" type="text/javascript"></script>-->
<script src="<?= ADMINASSETS ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/iCheck/js/custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/js.cookie.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets/global/scripts/datatable.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/datatables/datatables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/pages/scripts/table-datatables-buttons.min.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo base_url('assets/layouts/layout3/scripts/layout.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/layouts/layout3/scripts/demo.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/layouts/global/scripts/quick-sidebar.min.js') ?>" type="text/javascript"></script>
<script>

    $('input').iCheck();</script>
<script src="<?= ADMINASSETS ?>js/jquery.metisMenu.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="<?= ADMINASSETS ?>js/screenfull.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/pie-chart.js" type="text/javascript"></script>
<!--<script src="<?= USERASSETS ?>js/Chart.js"></script>-->
<script src="<?= ADMINASSETS ?>js/skycons.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="<?= ADMINASSETS ?>js/select2.min.js"></script>

<script src="<?= ADMINASSETS ?>ckeditor/ckeditor.js"></script>
<script src="<?= ADMINASSETS ?>ckeditor/samples/js/sample.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!--<script src="<?= ASSETSURL ?>js/bootstrap-datepicker.js"></script>-->
<!--<script src="https://checkout.razorpay.com/v1/checkout.js"></script>-->
<script type="text/javascript">
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
        if (!screenfull.enabled) {
            return false;
        }
        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });
    });
    $(document).ready(function () {

        $('select, .select').select2({
            //theme: "bootstrap"
        });
    });

</script>
<script>

</script>
<script type="text/javascript">
    var site_url = '<?= site_url() ?>';</script>
<!---->
<!--scrolling js-->
<script src="<?= ADMINASSETS ?>js/jquery.nicescroll.js"></script>
<script src="<?= ADMINASSETS ?>js/scripts.js"></script>
<!--//scrolling js-->
<script src="<?= ADMINASSETS ?>js/bootstrap.min.js"></script>
<script src="<?= ADMINASSETS ?>js/datatables/jquery.dataTables.min.js"></script>
<script src="<?= ADMINASSETS ?>js/datatables/jquery.dataTables.dtFilter.min.js"></script>
<script src="<?= ADMINASSETS ?>js/custom.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>jstree/jstree.min.js"></script>

<script src="<?= ADMINASSETS ?>js/moment.min.js"></script>
<!--<script src="<?= ADMINASSETS ?>js/bootstrap-datetimepicker.min.js"></script>-->


