<head>

    <title><?= SITENAME ?> Admin | <?php echo $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" /> 
    <meta name="keywords" content="" /> 
    <meta name="author" content="">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <link href="<?= USERASSETS ?>css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="<?= ADMINASSETS ?>css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?= ADMINASSETS ?>js/datatables/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="<?= ADMINASSETS ?>js/datatables/css/datatables.css" rel='stylesheet' type='text/css' />

    <link href="<?= ADMINASSETS ?>css/select2.min.css" rel="stylesheet" />
    <!-- Custom Theme files -->

    <link href="<?= ADMINASSETS ?>css/font-awesome.css" rel="stylesheet"> 
    <link href="<?= ADMINASSETS ?>css/custom.css" rel="stylesheet">
    <link href="<?= ADMINASSETS ?>css/animate.min.css" rel="stylesheet"> 
    <link href="<?= ADMINASSETS ?>css/colors.css" rel="stylesheet">
    <link href="<?= ADMINASSETS ?>css/fontfamilyssp.css" rel="stylesheet">
    <link href="<?= ADMINASSETS ?>css/hover-min.css" rel="stylesheet">
    <link href="<?= ADMINASSETS ?>css/padding.css" rel="stylesheet">

    <link href="<?= ADMINASSETS ?>jstree/themes/default/style.min.css" rel="stylesheet">

    <link href="<?= ANGULARURL ?>app.css" rel="stylesheet" type="text/css">
    <link href="<?= ANGULARURL ?>bower_components/angularjs-datepicker/src/css/angular-datepicker.css" rel="stylesheet" type="text/css" />

    <script>

        var site_url = "<?= site_url() ?>";

        var base_url = "<?= base_url() ?>";

        var oTable = null;

    </script>

    <?php // $this->load->view('admin/layout/script'); ?>
    <?php // echo Xcrud::load_css(); ?>

</head>