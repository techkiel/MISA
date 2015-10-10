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
<h1 class="app-name">MISA v1.1r1</h1>

<div class="scrollable sidebar-scrollable">
  <div class="scrollable-content">
    <div class="list-group" toggle="off" bubble target="mainSidebar">
      <a class="list-group-item" href="index.php">Home <i class="fa fa-chevron-right pull-right"></i></a>
      <a class="list-group-item" href="scan-desktop.php">Scan Barcode (Desktop)<i class="fa fa-chevron-right pull-right"></i></a>
      <a class="list-group-item" href="zxing://scan/?ret=http://<?php echo $ip?>/misa/inventory/scan.php?barcode={CODE}">Scan Barcode (Mobile)<i class="fa fa-chevron-right pull-right"></i></a>
      <a class="list-group-item" href="stats.php">Inventory Statistics<i class="fa fa-chevron-right pull-right"></i></a>
      <a class="list-group-item" href="report.php">Generate Report<i class="fa fa-chevron-right pull-right"></i></a>
      <a class="list-group-item" href="search.php">Search<i class="fa fa-chevron-right pull-right"></i></a>
    </div><!--/list-group-->
  </div><!--/scrollable-content-->
</div><!--/scrollable sidebar-scrollable-->
