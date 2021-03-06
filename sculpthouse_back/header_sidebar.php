<?php 
if(session_status()==PHP_SESSION_NONE ){
	session_start();
	}
 if(!isset($_SESSION['auth']))
{
$_SESSION['flash']['danger']="you do not have the right to access your account";
header('location:login.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>SCULPT HOUSE - Make It A Life Style</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>SCULPT<span>HOUSE</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
       
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <?php if($_SESSION['auth']->username=='rayen'):?>
          <p class="centered"><a href="profile.php"><img src="img/rayen.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Rayen</h5>
          <?php endif;?>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-shopping-cart"></i>
              <span>Shop Management</span>
              </a>
            <ul class="sub">
              <li><a href="product_order.php">Shop Data</a></li>
              <li><a href="add_product.php">Add Products</a></li>
            </ul>
          </li>
        
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>User Management</span>
              </a>
            <ul class="sub">
              <li><a href="user_table.php">Clients Table</a></li>
              <li><a href="job_app.php">Job Applications</a></li>
              <li><a href="employee.php">Employees</a></li>
            </ul>
          </li>
                  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-bars"></i>
              <span>Categorie</span>
              </a>
            <ul class="sub">
              <li><a href="AjouterCategorie.php">Ajout Categorie</a></li>
             <li><a href="AfficherCategorie.php">list Categorie</a></li>
            </ul>
          </li>
                   <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-bars"></i>
              <span>Event</span>
              </a>
            <ul class="sub">
              <li><a href="AjouterEvent.php">Ajout Event</a></li>
             <li><a href="AfficherEvent.php">list Event</a></li>
            </ul>
          </li>
                      <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-bars"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="AfficherForms.php">list Forms</a></li>
   
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-shopping-cart"></i>
              <span>Event Management</span>
              </a>
            <ul class="sub">
              <li><a href="../gestion-event/Views/Back/index.php">Manegment</a></li>
            
            </ul>
          </li>
            
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->