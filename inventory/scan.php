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
  <head>
    <meta charset="utf-8" />
<?php
//ini_set('display_errors', 1);
  include_once 'includes/ipconfig.php';
  include_once 'includes/db_connect.php';

  //Grabs barcode details
  $barcode 		= $_GET['barcode'];   

  //Retrieves matching row from inv_db
  $sql			= "SELECT * FROM inv_db WHERE barcode = '" . $barcode . "';";
  $result		= $link->query($sql);
  $row          = $result->fetch_assoc();
  $row_count    = mysqli_num_rows($result);
  $flag			= $row['flag'];
  $timestamp	= date("Y-m-d H:i:s");
?>
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
			<span>Scan Barcode</span>
		</div><!--/title-->

		<div class="scrollable-content">
			<div class="scrollable-content container-fluid section">

	<?php 
		if ($row_count=='0'){?>
			<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
			    <div class="panel-heading" toggle target="collapse1">
					<h4 class="panel-title">
						Search for <?php print $barcode ?> returned <?php print $row_count?> results. The item does not exist in the current database
					</h4>
				</div><!--/panel-heading-->
			    </div><!--/collapse-->
			  </div><!--/panel panel-default-->
			</div><!--/accordion-->



	<?php	} else {

			if (is_null($flag)){ ?>			
			<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
				<div class="panel-heading" toggle target="collapse1">

				  <h4 class="panel-title">
					  <?php print $row ['title'];?> - <?php print $barcode?>
				  </h4>
				</div><!--/panel-heading-->
				<div id="collapse1" toggleable active-class="in" exclusion-group="accordion1" default="active" class="panel-collapse collapse">
				  <div class="panel-body">
					<table>
						<tr>
							<td>Barcode&nbsp</td>
							<td>: <?php print $barcode?></td>
						</tr>
						<tr>
							<td>Title&nbsp</td>
							<td>: <?php print $row['title']?></td>
						</tr>
						<tr>
							<td>Author&nbsp</td>
							<td>: <?php print $row['author']?></td>
						</tr>
						<tr>
							<td>Accession #&nbsp</td>
							<td>: <?php print $row['accession_num']?></td>
						</tr>
						<tr>
							<td>Call #&nbsp</td>
							<td>: <?php print $row['call_num']?></td>
						</tr>
						<tr>
							<td>Time stamp&nbsp</td>
							<td>: <?php print $timestamp?></td>
						</tr>
					</table>
				  </div><!--/panel-body-->
				</div><!--/collapse-->
			  </div><!--/panel panel-default-->

			</div><!--/accordion-->

					<?php

					//Flags the current material as found
					$sql1 = "UPDATE inv_db SET flag = '" . 1 . "', timestamp = '" . $timestamp . "' WHERE barcode = '" . $barcode . "';";


						if ($link->query($sql1)) {
					?>
							<div id='confirmation'>
									<p>Item marked as found</p>
							</div>
					<?php
						} else {
					?>
							<div id='failure'>
									<p>Error!</p>
									<p><?php print $sql1 ?></p>
							</div>
					<?php
						}
			
			
			} else { ?>

				<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
					<div class="panel-heading" toggle target="collapse1">

					  <h4 class="panel-title">
						  <strong>WARNING: This item is already marked as found in the database. The current record shall NOT be modified</strong>
					  </h4>
					</div><!--/panel-heading-->
					<div id="collapse1" toggleable active-class="in" exclusion-group="accordion1" default="active" class="panel-collapse collapse">
					  <div class="panel-body">
						<table>
							<tr>
								<td>Barcode&nbsp</td>
								<td>: <?php print $barcode?></td>
							</tr>
							<tr>
								<td>Title&nbsp</td>
								<td>: <?php print $row['title']?></td>
							</tr>
							<tr>
								<td>Author&nbsp</td>
								<td>: <?php print $row['author']?></td>
							</tr>
							<tr>
								<td>Accession #&nbsp</td>
								<td>: <?php print $row['accession_num']?></td>
							</tr>
							<tr>
								<td>Call #&nbsp</td>
								<td>: <?php print $row['call_num']?></td>
							</tr>
							<tr>
								<td>Time stamp&nbsp</td>
								<td>: <?php print $row['timestamp']?></td>
							</tr>
						</table>
					  </div><!--/panel-body-->
					</div><!--/collapse-->
				  </div><!--/panel panel-default-->

				</div><!--/accordion-->
	<?php
			}
		}
		?>

		  </div><!--/scrollable-content container-fluid section-->
		</div><!--/scrollable-content-->
	  </div><!--/app-body-->
    </div><!--/app-->

  </body>
</html>
