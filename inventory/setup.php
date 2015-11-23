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
		  <span>Initial Setup</span>
		</div>
		<div class="scrollable-content section">
		
		  <form action="./dbsetup.php" id="dblogin" name="dblogin" method="POST">
			 
			 <div bs-panel title="Database Login">

			   <input
				bs-form-control
				
				type="text" 
				ng-model="invoice.username"
				name="dbuser"
				label="Username" 
				label-class="col-xs-3 col-sm-2 col-lg-1" 
				class="col-xs-9 col-sm-10 col-lg-11"
				placeholder="Username"
			   />

			   <input
				bs-form-control
				
				type="password" 
				ng-model="invoice.password"
				name="dbpassword"
				label="Password"
				label-class="col-xs-3 col-sm-2 col-lg-1" 
				class="col-xs-9 col-sm-10 col-lg-11"
				placeholder="Password"
			   />
			</br>
			</br>
			<div bs-panel class="form-actions">
			  <div content-for="navbarAction" duplicate>
				<button class="btn btn-primary" value="submit" type="submit">
				  Proceed
				</button>
			  </div>
			</div>
			   
		  </form>
		 </div><!--/bs-panel-->
		</div><!--/scrollable-content section-->
	  </div><!--/app-body-->
    </div><!--/app-->
  </body>
</html>
