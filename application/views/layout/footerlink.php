<script src="<?= ADMINASSETS ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/iCheck/js/custom.min.js" type="text/javascript"></script>
<!--<script>$('input').iCheck();</script>-->
<script src="<?= ADMINASSETS ?>js/jquery.metisMenu.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="<?= ADMINASSETS ?>js/jquery.nicescroll.js" type="text/javascript"></script>

<script src="<?= ADMINASSETS ?>js/select2.min.js"></script>

<script src="<?= ADMINASSETS ?>js/datatables/jquery.dataTables.min.js"></script>
<script src="<?= ADMINASSETS ?>js/datatables/jquery.dataTables.dtFilter.min.js"></script>
<script src="<?= ADMINASSETS ?>js/custom.js" type="text/javascript"></script>
<script src="<?= ADMINASSETS ?>jstree/jstree.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {


        $('.select').select2();
    }); // END document.ready

</script>



<script src="<?= ADMINASSETS ?>js/moment.min.js"></script>



<script src="<?= ADMINASSETS ?>js/screenfull.js" type="text/javascript"></script>
<script>
    $(function() {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }



        $('#toggle').click(function() {
            screenfull.toggle($('#container')[0]);
        });



    });
</script>

<script type="text/javascript">
    var site_url = '<?= site_url() ?>';</script>
<script src="<?= ADMINASSETS ?>js/bootstrap.min.js"></script>

<script src="<?= USERASSETS ?>js/all.js" type="text/javascript"></script>

<script src="<?= ANGULARURL ?>bower_components/tinymce/tinymce.min.js"></script>
<script src="<?= ANGULARURL ?>bower_components/angular/angular.min.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>jquery.placepicker.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>angular-ui.min.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>bower_components/angularjs-datepicker/src/js/angular-datepicker.js"></script>
<link rel="stylesheet" href="<?= ANGULARURL ?>bower_components/angularjs-datetime-picker/angularjs-datetime-picker.css" />

<script src="<?= ANGULARURL ?>bower_components/angularjs-datetime-picker/angularjs-datetime-picker.js"></script>

<script src="<?= ANGULARURL ?>jquery.placepicker.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>ui-bootstrap.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>angular-route.js"></script>
<script src="<?= ANGULARURL ?>angular-animate.js"></script>
<script src="<?= ANGULARURL ?>angular-sanitize.js"></script>
<script src="<?= ANGULARURL ?>bower_components/angular-ui-tinymce/dist/tinymce.min.js"></script>
<script src="<?= ANGULARURL ?>admin.control.js" type="text/javascript"></script>
<script src="<?= ANGULARURL ?>services.js" type="text/javascript"></script>
<?php // echo Xcrud::load_js(); ?>     
<script>
//    $(document).trigger('xcrudreinit');
</script>



