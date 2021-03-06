<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?> "rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/price-range.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
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
    <nav class="navbar navbar-custom navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span><a class="navbar-brand span-right" href="/">BeliBuku</a></span>
            </div>
            <div class="navbar-collapse collapse" id="searchbar">
                <ul class="nav navbar-nav navbar-left">
                    <li id="userPage" class="custom-cari">
                         <li><a href="#">Pencarian</a></li>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Daftar</a></li>
                    <li><a href="about.html">Login</a></li>
                    <li><a href="{{ URL::to('keranjang') }}" class ='span-left'><i class="fa fa-shopping-cart"></i> Keranjang</a></li>
                </ul>
                <!-- <form class="navbar-form"> -->
                <?php echo form_open('home/cari',array('class'=>'navbar-form','method'=>'GET'))?>
                <div class="form-group" style="display:inline;">
                    <div class="input-group" style="display:table;">
                        <input class="form-control" id="keyword" name="search" placeholder="Judul, Pengarang" autocomplete="off" autofocus="autofocus" type="text">
                   <!--      <span class="input-group-btn" style="width:1%">
                            <select class="form-control" name="kategori">
                              <option value="0">Semua Kategori</option>
                              <option value="1">Lorem ipsum </option>
                              <option value="2">Lorem ipsum </option>
                            
                          </select>
                      </span> -->
                      <span class="input-group-btn" style="width:1%;">
                        <button type="submit" class="btn btn-success" type="button">  <span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
            <!-- </form> -->
            <?php echo form_close(); ?>

        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><?php echo $breadcrumb; ?></li>
            </ol>
        </div>
    </div>

<?php $this->load->view($main); ?>
</div>



<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>
</html>