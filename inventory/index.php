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
	include_once 'includes/ipconfig.php';
	include_once 'includes/institution.php';
?>
  <head>
    <meta charset="utf-8" />
<?php
	function curPageURL() {
	 $pageURL = 'http';
	 if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 //http://stackoverflow.com/questions/17218926/how-to-get-rid-of-php-notice-undefined-index-https-in-x-on-line-123
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}
	//http://webcheatsheet.com/php/get_current_page_url.php
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
		  <span>Home</span>
		</div>

		<!--<div class="scrollable">  -->
		<div class="scrollable-content">

			<div class="list-group">
			  <div class="list-group-item">
				<h1><?php echo $institution?><br/>
				  <small>Mobile Inventory Software for Android (MISA) v1.2</small>
				</h1>
			  </div>

			  <div class="list-group-item media">
				<div class="pull-right">
				  <i class="fa fa-barcode feature-icon text-primary"></i>
				</div>
				<div class="media-body">
					<h3 class="media-heading">Barcodes</h3>
					This tool utilizes barcodes as access points to perform inventory on the library's collection<br>
					</div>
			  </div>


			  <div class="list-group-item media">
				<div class="pull-right">
				  <i class="fa fa-android feature-icon  text-primary"></i>
				</div>
				<div class="media-body">
					<h3 class="media-heading">ZXing Barcode Scanner</h3>
					This tool scans barcodes using the <a href="https://github.com/zxing/zxing/wiki/Frequently-Asked-Questions">ZXing</a> <a href="https://play.google.com/store/apps/details?id=com.google.zxing.client.android&hl=en">Barcode Scanner</a> for Android.<br>
				</div>
			  </div>


			  <div class="list-group-item media">
				<div class="pull-right">
				  <i class="fa fa-file-text feature-icon  text-primary"></i>
				</div>
				<div class="media-body">
					<h3 class="media-heading">Manual</h3>
					The instruction manual could be found <a href="docs/manual.pdf">here</a><br>
				</div>
			  </div>

			  <div class="list-group-item media">
				<div class="pull-right">
				  <i class="fa fa-stethoscope feature-icon  text-primary"></i>
				</div>
				<div class="media-body">
					<h3 class="media-heading">Bug Reports/Feature Requests</h3>
					Please contact me at <a href="mailto:jdmiclat@up.edu.ph?Subject=MISA%20Bug%20Report" target="_top">jdmiclat@up.edu.ph</a><br>
					Please include the following details: <br>
					Current URL: <?php echo curPageURL()?> <br>
					User Agent String: {{userAgent}}
				</div>
			  </div>
			  
			  <div class="list-group-item media">
				<div class="pull-right">
				  <i class="fa fa-gavel feature-icon  text-primary"></i>
				</div>
				<div class="media-body">
					<h3 class="media-heading">License</h3>
					Mobile Inventory System for Android (MISA) version 1.1r1, Copyright (C) 2015 John Ezekiel D. Miclat<br>
					MISA comes with ABSOLUTELY NO WARRANTY; for <a href="license.txt">details</a>.<br>
					This is free software, and you are welcome to redistribute it under certain conditions; for <a href="license.txt">details</a>.<br>
					Additional Open Source Licenses for the components used in this project could be found <a href="license.txt">here</a>.
				</div>
			  </div>

			</div>

		</div><!--/scrollable-content-->
	  </div><!--/app-body-->
    </div><!--/app-->
  </body>
</html>
