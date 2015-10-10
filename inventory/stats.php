<!DOCTYPE html>
<html>
<!--
LICENSE

MISA - an open source mobile inventory software for android.
Copyright (C) 2015  John Ezekiel D. Miclat (https://github.com/techkiel)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
-->
<?php

//ini_set('display_errors', 1);
  include_once 'includes/ipconfig.php';
  include_once 'includes/db_connect.php';


  
  //Retrieves all missing items from inv_db
  $sql0   			= "SELECT barcode FROM inv_db WHERE flag IS NULL";
  $result0 			= $link->query($sql0);
  $row_count0 	    		= mysqli_num_rows($result0);
  //Retrieves all found items from inv_db
  $sql1				= "SELECT barcode FROM inv_db WHERE flag IS NOT NULL";
  $result1 			= $link->query($sql1);
  $row_count1    		= mysqli_num_rows($result1);
  //Retrieves all items from inv_db
  $sql2	  			= "SELECT barcode FROM inv_db";
  $result2 			= $link->query($sql2);
  $row_count2    		= mysqli_num_rows($result2);

  //determines the inventory stats
  $found			= ($row_count1/$row_count2);
  $missing			= ($row_count0/$row_count2);
  $total			= ($found+$missing);

  $count			= 1;
  $timestamp			= date("Y-m-d H:i:s");
  
?>

  <head>
    <meta charset="utf-8" />
    <title>Barcode Inventory App</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	<!--css-->
    <link rel="stylesheet" href="../dist/css/mobile-angular-ui-hover.min.css" />
    <link rel="stylesheet" href="../dist/css/mobile-angular-ui-base.min.css" />
    <link rel="stylesheet" href="../dist/css/mobile-angular-ui-desktop.min.css" />
    <link rel="stylesheet" href="misa.css" />
	<!--js-->
    <script src="../dist/js/angular.min.js"></script>
    <script src="../dist/js/angular-route.min.js"></script>
    <script src="../dist/js/angular-touch.min.js"></script>
    <script src="../dist/js/mobile-angular-ui.min.js"></script>
    <script src="misa.js"></script>
  </head>
  <body ng-app="MobileAngularUiExamples" ng-controller="MainController">

    <!-- Sidebars -->
    <div ng-include="'sidebar.php'" class="sidebar sidebar-left" toggleable parent-active-class="sidebar-left-in" id="mainSidebar"></div><!--/sidebar sidebar-left-->

    <div class="app">

      <!-- Navbars -->

      <div class="navbar navbar-app navbar-absolute-top">
        <div class="navbar-brand navbar-brand-center" yield-to="title">
          <span>Barcode Inventory App</span>
        </div><!--/navbar-brand navbar-brand-center-->
        <div class="btn-group pull-left">
          <div ng-click="toggle('mainSidebar')" class="btn btn-navbar sidebar-toggle">
            <i class="fa fa-bars"></i> Menu
          </div><!--/btn btn-navbar sidebar-toggle-->
        </div><!--/btn-group pull-left-->
        <div class="btn-group pull-right" yield-to="navbarAction">
        </div><!--/btn-group pull-right-->
      </div><!--navbar navbar-app navbar-absolute-top-->

      <div class="navbar navbar-app navbar-absolute-bottom">
        <div class="btn-group justified">
          <a href="zxing://scan/?ret=http://<?php echo $ip?>/misa/inventory/scan.php?barcode={CODE}" class="btn btn-navbar"><i class="fa fa-camera-retro fa-navbar"></i> Scan Barcode</a>
		</div><!--/btn-group justified-->
      </div><!--/navbar navbar-app navbar-absolute-bottom-->


      <!-- App Body -->
      <div class="app-body">

		<div content-for="title">
		  <span>Report</span>
		</div><!--/title-->

		<div class="scrollable-content">
		 <div class="scrollable-content container-fluid section">
			<div class='list-group'>
				<h2><small>Inventory Statistics as of <strong><?php print $timestamp?></strong></small></h2>
				<div class='panel panel-default'>
					<p><small>
						<table>
							<tr align='center'>
								<td width='100'></td>
								<td width='100'><strong>Number</strong></td>
								<td width='100'><strong>Percentage</strong></td>
							</tr>
							<tr align='center'>
								<td align='right'><strong>Item<?php if ($row_count1>1) {?>s
									<?php} else if ($row_count1==1 or $row_count1==0){
									?> <?php
									}?>
									Found:</strong></td>
								<td><?php echo $row_count1?></td>
								<td><?php print sprintf("%.2f%%", $found*100)?></td>
							<tr>
							<tr align='center'>
								<td align='right'><strong>Item<?php if ($row_count0>1) {?>s
									<?php} else if ($row_count0==1 or $row_count0==0){
									?> <?php
									}?>
									Missing:</strong></td>
								<td><?php echo $row_count0?></td>
								<td><?php print sprintf("%.2f%%", $missing*100)?></td>
							</tr>
							<tr align='center'>
								<td align='right'><strong>Total:</strong></td>
								<td><?php echo $row_count2?></td>
								<td><?php print sprintf("%.2f%%", $total*100)?></td>
							</tr>
						</table>
					</small></p>
				</div><!--/panel panel-default-->
			</div><!--/list-group-->

			</div><!--/accordion-->

		  </div><!--/scrollable-content container-fluid section-->
		</div><!--/scrollable-content-->
	  </div><!--/app-body-->
    </div><!--/app-->

  </body>
</html>
