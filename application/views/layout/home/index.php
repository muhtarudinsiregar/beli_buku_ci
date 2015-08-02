<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?> "rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css '); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    
<nav class="navbar navbar-custom navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <span class=""><a class="navbar-brand brand-custom span-right" href="<?php echo site_url('/') ?>"><span class="fa fa-book"></span> BeliBuku</a></span>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Link</a></li> -->
      <li><a href="#">Pencarian</a></li>
    </ul>
    <div class="col-sm-3 col-md-6">
       <?php echo form_open('home/cari',array('class'=>'navbar-form','method'=>'GET'))?>
        <div class="input-group col-md-12">
            <input type="text" class="form-control" placeholder="Judul, Pengarang" name="search" required>
            <div class="input-group-btn">
                <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <ul class="nav navbar-nav navbar-left">
        <li><a href="<?php echo site_url('keranjang'); ?>"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
        <?php if ($this->session->userdata('isLogin')==true): ?>
                <!-- <li><a href="<?php echo site_url('anggota/dashboard'); ?>">Dashboard</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nama'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo site_url('anggota/dashboard'); ?>">Sejarah Transaksi</a></li>
                      <li><a href="#">Profil</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo site_url('login/logout'); ?>">Keluar</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="<?php echo site_url('daftar'); ?>">Daftar</a></li>
                <li><a href="<?php echo site_url('login') ?>">Login</a></li>
            <?php endif ?>
      
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<ol class="breadcrumb item">
    <li class=""><a href="<?php echo site_url('/'); ?>">Home</a></li>
    <li class="active"><?php echo $breadcrumb; ?></li>
</ol>
<div class="container">
    <div class="row">
        <ol class="breadcrumb item">
                <li class=""><a href="<?php echo site_url('/'); ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active"><?php echo $breadcrumb; ?></li>
        </ol>
    </div>
        
       <div class="row">
          <?php if (!empty($sidebar)) {
            $this->load->view($sidebar);
        } ?>

        <?php $this->load->view($main); ?>
       </div>
  
</div>



<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/chart.min.js') ?>"></script>
<script>
  var data = {
    labels: <?php echo json_encode($data_tanggal) ?>,
    datasets: [
    {
      fillColor: "rgba(151,187,205,0.5)",
      strokeColor: "rgba(151,187,205,0.8)",
      pointColor: "rgba(220,220,220,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(220,220,220,1)",
      highlightFill: "rgba(151,187,205,0.75)",
      highlightStroke: "rgba(151,187,205,1)",
      data: <?php echo json_encode($data_penjualan) ; ?>
    }
    ]
  };

  var ctx = document.getElementById("chartPenjualan").getContext("2d");
  var myLineChart = new Chart(ctx).Line(data);

</script>
</body>
</html>